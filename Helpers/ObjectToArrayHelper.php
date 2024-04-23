<?php

namespace App\Helpers;

class ObjectToArrayHelper
{
    public static function convertToArray($object): array
    {
        $array = [];

        if (is_object($object)) {
            $reflection = new \ReflectionClass($object);
            $properties = $reflection->getProperties();

            foreach ($properties as $property) {
                $propertyName = $property->getName();
                $property->setAccessible(true);
                $propertyValue = $property->getValue($object);

                if (is_object($propertyValue)) {
                    // Se for um objeto, aplicar recursão para converter objetos aninhados em arrays
                    $array[$propertyName] = self::convertToArray($propertyValue);
                } elseif (is_object($propertyValue) && method_exists($propertyValue, 'format')) {
                    // Tratamento especial para objetos que possuem o método format() (como DateTime, Time, etc.)
                    $array[$propertyName] = $propertyValue->format('Y-m-d H:i:s');
                } else {
                    // Valor escalar (não objeto), atribuir diretamente ao array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }

        return $array;
    }
}
