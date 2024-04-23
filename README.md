# Sistema de Alertas

## Framework utilizado CodeIgniter 4 

 [official site](https://codeigniter.com).

## Requisitos do servidor

É necessário PHP versão 8.1 ou superior, com as seguintes extensões instaladas:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Além disso, certifique-se de que as seguintes extensões estejam habilitadas em seu PHP:

- json (ativado por padrão - não desligue)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) se você planeja usar MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) se você planeja usar a biblioteca HTTP\CURLRequest

### Arquitetura do Sistema

> [MVC - SOLID]
> Arquitetura de software adotada é modular.
Essa arquitetura segue os princípios de separação de responsabilidades e facilita a manutenção, teste e evolução do sistema ao longo do tempo. O uso de interfaces entre as camadas promove o baixo acoplamento e a alta coesão, tornando o código mais modular e flexível.

 ## 🛠 Model:
>
>Representa os objetos de dados e a lógica de negócios da aplicação.

### Ex. Implementação Model

![App Screenshot](public\assets\img\readme\ExModel.png)

 ## 🛠 Controller:
>
>Gerencia o fluxo da aplicação e atua como intermediário entre a visão e o modelo.

### Ex. Implementação Controller

![App Screenshot](public\assets\img\readme\ExController.png)


## 🛠 Service:
>
>Contém a lógica de negócios da aplicação e coordena a interação entre o controlador e o modelo.

### Ex. Implementação Service

![App Screenshot](public\assets\img\readme\ExService.png)

## 🛠 Repository:
>
>Encapsula a lógica de acesso aos dados e fornece uma interface para manipular os dados persistentes.

### Ex. Implementação Repository

![App Screenshot](public\assets\img\readme\ExRepository.png)

## 🛠 Entities:
>
>Representa os objetos principais de domínio ou estruturas de dados centrais da aplicação.

### Ex. Implementação Entities

![App Screenshot](public\assets\img\readme\ExEntities.png)

## 🛠 Data Mapper (Mapeador de Dados):
>
>Mapeia os objetos de domínio (entidades) para o esquema de banco de dados e gerencia a persistência dos dados.


![App Screenshot](public\assets\img\readme\ExMapper.png)



# 🛠 Particularidades(caracteristicas) do CI4
>
> [!WARNING]
>
> No CodeIgniter 4, você pode configurar a injeção de dependência diretamente no arquivo app/Config/Services.php 
 sem a necessidade explícita de criar uma classe de fábrica (Factory) para cada serviço. A classe Services nativa do CodeIgniter 4 já fornece um mecanismo para definir como as instâncias das suas classes serão criadas e gerenciadas através da injeção de dependência.
 >
>Ao configurar os serviços no arquivo Services.php, você está essencialmente criando fábricas internas que o CodeIgniter 4 utiliza para criar instâncias das suas classes quando necessário. Isso permite que você defina associações entre interfaces e implementações concretas, controlando como e quando cada classe é instanciada e injetada em outras partes da sua * aplicação.
>
> Outro fator do CodeIgniter 4 está em nao deixar vc injetar uma interface no construtor, portanto foi realizado a injecao no construtor chamando o o metodo dessa classe Config/Service.php 
 Para que a injeção de dependência funcione corretamente, você precisará configurar o CodeIgniter 4 para resolver automaticamente as dependências ao criar instâncias dos seus serviços e repositórios.

#### Fluxo da Arquitetura

![App Screenshot](public\assets\img\readme\fluxoSolid.png)


## Banco de Dados Utilizado