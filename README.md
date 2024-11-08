# Sistema de Controle de Estoque e Vendas de Óculos

Este sistema tem como objetivo gerenciar o estoque e as vendas de óculos em uma loja, permitindo o cadastro de produtos e funcionários, o registro de vendas e a geração de relatórios gerenciais.

## 1. Objetivos do Sistema

### 1.1 Objetivo Principal
O objetivo principal do sistema é o controle de estoque e vendas de óculos, identificando as funcionalidades essenciais e os dados que serão gerados, armazenados e processados. O sistema deve permitir o cadastro eficiente de produtos e funcionários, o registro detalhado de transações de vendas, e a geração de relatórios sobre o desempenho de vendas, status de estoque e as finanças da loja, facilitando a tomada de decisões estratégicas.

### 1.2 Objetivos Específicos

- **1.2.1 Cadastro de Funcionários**: O sistema permitirá o cadastro de funcionários, com diferentes permissões e dados como nome, CPF, função e status. Isso gerará informações sobre o quadro de funcionários e suas permissões no sistema.
  
- **1.2.2 Cadastro de Óculos**: O sistema permitirá cadastrar óculos, gerando dados como nome, marca, preço e quantidade em estoque.
  
- **1.2.3 Registro de Vendas**: O sistema registrará as transações de vendas, criando registros de vendas realizadas com dados sobre o vendedor, cliente (se aplicável), produto, quantidade e valores.
  
- **1.2.4 Emissão de Relatórios**: O sistema gerará relatórios como vendas totais, vendas por produto, vendas por funcionário e status do estoque (produtos em baixa, por exemplo).

---

## 2. Dados Mantidos no Sistema

### 2.1 Cadastro de Funcionários
Os dados mantidos para o cadastro de funcionários incluem:

- **Nome completo**
- **CPF**
- **Carteira de Trabalho**
- **Telefone**
- **Data de Registro**
- **Endereço**
- **Login**
- **Senha**
- **Função do funcionário**
- **Status** (ativo/inativo)

### 2.2 Cadastro de Óculos
Os dados mantidos para o cadastro de óculos incluem:

- **Marca**
- **Modelo/Nome do produto**
- **Cor**
- **Material**
- **Preço**
- **Categoria** (ex: óculos de sol, óculos de grau)
- **Imagem do produto**

### 2.3 Registro de Vendas
Os dados registrados para cada venda incluem:

- **Data da venda**
- **Forma de pagamento** (cartão de crédito, débito, dinheiro)
- **Status da venda** (concluída, pendente, cancelada)
- **Descontos aplicados** (se houver)

---

## 3. Fluxo de Trabalho
O fluxo de trabalho descreve o processo de venda dentro da loja:

1. O cliente escolhe os óculos que deseja comprar.
2. Os óculos escolhidos são separados até a finalização da compra.
3. O **vendedor** registra a venda no sistema, incluindo o produto, a quantidade e a forma de pagamento.
4. O sistema atualiza automaticamente o estoque e registra o vendedor responsável pela venda.
5. O sistema gera relatórios financeiros, se necessário.

---

## 4. Funcionamento do Sistema

### 4.1 Acesso ao Sistema
O acesso ao sistema será feito por **login e senha**, com diferentes níveis de permissão, de acordo com o perfil do usuário:

- **Administrador**: Acesso total a todas as funcionalidades do sistema.
- **Vendedor**: Acesso ao módulo de vendas, sem permissão para editar produtos ou visualizar relatórios financeiros.
- **Estoquista**: Acesso ao módulo de gerenciamento de estoque, sem acesso ao módulo de vendas ou relatórios financeiros.
- **Financeiro**: Acesso aos relatórios financeiros e controle de fluxo de caixa, sem acesso ao gerenciamento de produtos ou funcionários.

### 4.2 Módulo de Funcionários
- Cadastro de novos **funcionários**.
- Gerenciamento de dados dos **funcionários** (alterações de informações, status, etc.).
- Alteração das **permissões de acesso** conforme o perfil do usuário (vendedor, administrador, etc.).

### 4.3 Módulo de Produtos
- Cadastro e **gestão de produtos** (óculos) disponíveis para venda.
- Informações detalhadas sobre cada item, como **preço**, **quantidade em estoque**, **marca** e **categoria**.
- Atualização do **estoque** à medida que as vendas são realizadas.

### 4.4 Módulo de Vendas
- Registro de todas as **transações de venda** realizadas.
- Geração de dados detalhados sobre a venda, incluindo **produto(s)** vendido(s), **quantidade**, **valor total** e **vendedor** responsável.
- Atualização do **estoque** conforme as vendas são realizadas.

### 4.5 Módulo de Relatórios
O módulo de relatórios permitirá a geração dos seguintes relatórios:

- **Vendas realizadas** (total, por produto, por vendedor, etc.).
- **Produtos em estoque** (quantidade atual, produtos em baixa).
- **Produtos vendidos** (relatório detalhado de transações de venda).
- **Faturamento total** (valores totais das vendas realizadas).
- **Vendas por vendedor** (desempenho individual de cada funcionário).

---

## 5. Diagrama do Modelo Entidade-Relacionamento (MER)

O diagrama a seguir mostra a relação entre as entidades do sistema, incluindo **Funcionários**, **Produtos**, **Vendas** e **Relatórios**:

### 5.1 Conceitual
![Diagrama MER](/imagens_readme/mer_conceitual.png)

### 5.2 Lógico
![Diagrama MER](/imagens_readme/mer_logico.png)
