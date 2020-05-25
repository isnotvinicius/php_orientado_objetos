# PHP Orientado a objetos.

## Classes e métodos

- Criamos uma classe em php com a sintaxe "class Nome_da_classe", lembrando sempre de colocar a primeira letra do nome da classe maiuscula.

- Para instanciarmos um objeto utilizamos a sintaxe "$nome_objeto = new Nome_da_classe();".

- Para criarmos um método de serviço dentro da classe colocamos o termo "Public" na frente do termo "Function", ou seja, "public function nome_do_metodo()".

- O método precisa receber os paramêtros para realizar o serviço e a passagem funciona como qualquer outra "nome_do_metodo(tipo_de_dado $parametro)".

- Podemos também adicionar o tipo de retorno do método "nome_do_metodo($parametros): tipo_de_retorno".

- Dentro do método podemos utilizar a pseudo-váriavel "$this" que será uma referência ao nosso objeto dentro do método.

- Em um método que tem retorno vazio e possui if e else podemos utilizar a sintaxe "return;" dentro do if para podermos eliminar o else e deixar o código mais limpo.


## Modificadores de acesso

- Colocamos o termo "private" na frente do nome do atributo para fazer com que apenas a própria classe tenha acesso ao atributo, 
se tentarmos modificar o atributo fora da classe não poderemos realizar a operação, isto se chama encapsulamento.

- Utilizamos Protected para permitir acessar o atributo dentro de sua própria classe e dentro das classes filhas mas não para classes exteriores.


## Métodos de acesso 

- Os métodos que devolvem um valor de atributo da classe são chamados de Métodos Getter. 

- Os métodos que definem o valor em um atributo privado são chamados de Métodos Setter.


## Método Construtor e Destrutor

- O método construtor é feito com "public function __construct()", este método é chamado no momento em que a classe é construida com o termo "new".

- O construtor pode inicializar atributos, fazendo com que para criar o objeto seja obrigatório passar os valores dos atributos caso eles não recebam um valor dentro do método.
por exemplo, para criar uma conta bancária iniciamos o saldo com 0 no construtor e colocamos dentro do construtor que é necessário informar CPF e Titular para criar o objeto.

- Devemos sempre separar os métodos para que eles tenham uma única função, evitando colocar tudo dentro do construtor deixando o código dificil de ser lido.

- Na hora de interpetar códigos o php utiliza uma ferramenta chamada de Garbage Collector, que limpa da memória instâncias que não saõ apontadas por nenhuma váriavel e estão
lá só para ocupar memória.

- O método mágico "__destruct()" é executado quando uma instância é apagada da memória peloo garbage collector.


## Refatorar

- Refatorar é um conceito importante para um código bom, nele nós alteramos o código de modo que ele fique mais legivel mas sem alterar seu comportamento.

- Isto facilita o trabalho de quem utilizar nosso código pois fica um código muito mias fácil de se ler e compreender.


## Métodos estáticos

- Um atributo pode pertencer a classe e não a instância dos objetos criados, para isso adicionamos o "static" na criação do atributo. O mesmo se aplica a métodos.

- Para utilizar o static utilizamos "Nome_da_classe + :: + nome_do_atributo/nome_do_metodo".


## Self e This

- Utilizamos o this para referenciar o objeto dentro da classe.

- O termo "self" serve para referenciar a classe utilizada no momento, mesmo conceito do $this mas para classes.


## Composição 

- Composição de objetos é quando instânciamos um objeto de uma classe dentro de outra classe. No exemplo temos a classe Titular com Nome e CPF, colocamos o atributo
titular dentro da classe Conta e no programa principal instânciamos o objeto com a classe Conta que possuí os dois atributos da classe Titular.


## Herança 

- A Herança possibilita que as classes compartilhem seus atributos, métodos e outros membros da classe entre si. 

- Para a ligação entre as classes, a herança adota um relacionamento esquematizado hierarquicamente. (Classe Base e Classe Derivada).

- Utilizamos o termo "parent" para chamar o construtor da classe mãe ao criar o objeto de uma classe filha.

- Quando queremos impedir que uma classe seja extendida por outras classes para evitar problemas podemos adicionar "final" na frente de class.
É possível fazer isso com métodos também para evitar a sobrescrita de um método.


## Namespace/use

- O namespace serve para separarmos as classes em pacotes. Isto ajuda quando temos arquivos com mesmos nomes ou baixamos um projeto pronto.

- Se em uma classe com namespace definido precisarmos acessar classes de outro namespace, precisamos adicionar o "use" ou informar o seu nome completo (namespace + nome da classe).

- Se formos "importar" mais de uma classe do mesmo namespace utilizando o use podemos colocá-las em uma só linha utilizando {}


## Autoloader

- A função spl_autoload_register faz com que importemos os arquivos das classes autoamticamente sem precisar do require_once.

- Como estamos utilizando namespace a string recebida vem com o nome completo do arquivo, fazemos então o replace de "Alura\Banco" por "src" para importar corretamente.

- Sistemas operacionais diferentes mudam como colocar o caminho de um arquivo utilizando / ou \, para isso fazemos o replace utilizando o DIRECTORY_SEPARATOR
que identifica o sistema que está sendo utilizado e faz o replace corretamente para que o caminho do arquivo seja encontrado.

- Para finalizar adicionamos o .php na string do caminho utilizando "$NomeDaString .= '.php';


## Sobrescrita de métodos

- A Sobrescrita de métodos é quando nós temos o mesmo método em classes diferentes mas com funcionalidades diferentes.
No exemplo estamos utilizando conta corrente e conta poupança, as duas realizam saque mas a tarifa para elas é diferente, neste caso
a sobrescrita funciona bem, implementamos o mesmo método mudando apenas o valor da tarifa.


## Métodos Abstratos | Classes Abstratas

- Uma classe abstrata é uma classe que não está completa. Ela precisa de outras classes, que extendem ela, para completá-la.

- Uma classe abstrata não pode ser instânciada.

- Uma classe abstrata precisa de pelo menos um método abstrato para ser criada.

- Métodos abstratos são métodos pertencentes a uma classe abstrata e que não são implementados, implementamos eles apenas nas classes filhas.

- Quando temos um método abstrato obrigatóriamente temos que implementar ele em todas as classes filhas.


## Polimorfismo

- É quando duas ou mais classes derivadas da mesma superclasse podem invocar métodos que têm a mesma assinatura, mas comportamentos distintos.


## Interface

- Uma interface é uma classe abstrata onde todos os métodos dela são abstratos.

- Todas as classes que implementam uma interface precisam ter TODOS os métodos da interface.

- É uma maneira de contornar a falta de herança múltipla, que não existe em php mas existe em linguagens como c++.


## Métodos Mágicos

- Métodos mágicos sempre possuem __ no inicio do seu nome. "__nomeMetodo()".

- No método __toString() podemos formatar uma string como quisermos e na hora de exibir basta chamar o método.


## Traits

- É uma forma do php pegar um código e injetar em uma classe.

- Para utilizar a trait basta digitar "use + Nome_Arquivo_Trait" dentro do corpo da classe, isto fará com que os códigos na trait sejam colados dentro da classe.
