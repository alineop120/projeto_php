# Levantamento de Dados e Análise de Requisitos

## 1. Objetivo Principal
O objetivo principal do sistema é o controle de estoque e venda de óculos, proporcionando uma gestão eficiente do inventário e a emissão de relatórios detalhados sobre as vendas. O sistema deve permitir que os funcionários (vendedores e administradores) interajam com a plataforma de forma intuitiva, facilitando o processo de compra, cadastro de produtos e controle financeiro.

## 2. Objetivos Específicos

- **2.1 Cadastro de Funcionários**: O sistema permitirá o cadastro de diferentes tipos de funcionários, com diferentes permissões baseadas no perfil de cada funcionário (ex: vendedores, administradores, etc.).

- **2.2 Cadastro de Produtos**: Serão cadastrados os produtos (óculos) disponíveis para venda, com informações detalhadas sobre cada item (marca, modelo, cor, preço, estoque, etc.).

- **2.3 Registro de Vendas**: O sistema irá registrar todas as transações de venda realizadas, incluindo o produto vendido, quantidade, valor, data e dados do cliente (quando aplicável).

- **2.4 Emissão de Relatórios**: O sistema gerará relatórios gerenciais sobre as vendas realizadas, produtos em estoque, produtos vendidos, etc.

## 3. Dados Mantidos no Sistema

### 3.1 Cadastro de Funcionários
Os dados mantidos para o cadastro de funcionários incluem:

- ID do funcionário (chave primária)
- Nome completo
- CPF ou CNPJ
- Login
- Senha (criptografada)
- Função do funcionário
- Telefone (opcional)
- Data de registro
- Status (ativo/inativo)

### 3.2 Cadastro de Produtos
Os dados mantidos para o cadastro de produtos incluem:

- ID do Produto (chave primária)
- Marca
- Modelo/Nome do produto
- Cor
- Material
- Preço
- Quantidade em estoque
- Categoria (ex: óculos de sol, óculos de grau)
- Imagem do produto (opcional)

### 3.3 Registro de Vendas
Os dados registrados para cada venda incluem:

- ID da venda (chave primária)
- Data da venda
- ID do vendedor (funcionário que registrou a venda)
- ID do produto (produtos vendidos)
- Quantidades
- Valor total
- Forma de pagamento (cartão de crédito, débito, dinheiro)
- Status da venda (concluída, pendente, cancelada)
- Descontos aplicados (se houver)

## 4. Fluxo de Trabalho
O cliente poderá escolher os óculos na loja e, ao finalizar a compra, o sistema registrará todos os dados da venda, incluindo o funcionário responsável, o produto vendido e o total da compra. O processo de gerenciamento de estoque será feito pelos administradores e vendedores.

## 5. Funcionamento do Sistema

### 5.1 Acesso ao Sistema
O sistema será acessado por login e senha. O acesso será dividido por perfil:

- **Administrador**: Acesso total a todas as funcionalidades do sistema.
- **Vendedor**: Acesso ao módulo de vendas, sem permissões para editar produtos ou visualizar relatórios financeiros.
- **Estoquista**: Acesso ao módulo de gerenciamento de estoque, sem acesso ao módulo de vendas ou relatórios financeiros.
- **Financeiro**: Acesso a relatórios financeiros e controle de fluxo de caixa, mas sem acesso ao gerenciamento de produtos ou funcionários.

### 5.2 Módulo de Funcionários
O módulo de funcionários permitirá o cadastro de novos funcionários e o gerenciamento dos dados dos mesmos (alterações e status), além da possibilidade de alterar permissões de acesso.

### 5.3 Módulo de Produtos
O módulo de produtos permitirá o cadastro e a gestão dos óculos disponíveis para venda, com informações detalhadas sobre cada item, como preço, descrição e quantidade em estoque.

### 5.4 Módulo de Vendas
O módulo de vendas registrará todas as transações realizadas, com dados do produto, vendedor, quantidade e valor.

### 5.5 Módulo de Relatórios
O módulo de relatórios permitirá a geração de relatórios sobre:

- Vendas realizadas
- Produtos em estoque
- Produtos vendidos
- Faturamento total
- Vendas por vendedor

---

# 2. Banco de Dados

## 2.1 Desenho do MER (Modelo Entidade-Relacionamento)

### 2.1.1 Diagrama Conceitual (Entidades e Relacionamentos)
As principais entidades do sistema são:

- **Funcionário** (relacionado a Venda, Função)
- **Produto** (relacionado a Venda)
- **Venda** (relacionada a Produto, Funcionário)
- **Cliente** (relacionado a Venda, opcional)

### 2.1.2 Diagrama Lógico (Tabelas e Campos)
O banco de dados será composto pelas seguintes tabelas:

#### 2.1.2.1 Tabelas

- **Funcionários**
  - `id_funcionario` (PK)
  - `nome`
  - `cpf_cnpj`
  - `email`
  - `login`
  - `senha`
  - `funcao`
  - `telefone`
  - `status`
  - `data_registro`

- **Produtos**
  - `id_produto` (PK)
  - `nome`
  - `descricao`
  - `marca`
  - `preco`
  - `quantidade_estoque`
  - `categoria`
  - `imagem_url`
  - `data_cadastro`

- **Vendas**
  - `id_venda` (PK)
  - `data_venda`
  - `id_funcionario` (FK)
  - `id_cliente` (FK - opcional)
  - `valor_total`
  - `forma_pagamento`
  - `status_venda`
  - `desconto_aplicado`

- **Itens_Venda** (Tabela associativa entre Venda e Produto)
  - `id_item_venda` (PK)
  - `id_venda` (FK)
  - `id_produto` (FK)
  - `quantidade`
  - `valor_unitario`

---

# 3. Mapa do Site

O Mapa do Site ilustra como as páginas estão organizadas no sistema e como os funcionários navegarão entre elas.

## 3.1 Estrutura do Sistema

### 3.1.1 Página Inicial
- Login/Registro de Funcionário
- Acesso aos Produtos
- Acesso ao Painel Administrativo

### 3.1.2 Área do Funcionário
- Perfil
- Histórico de Vendas
- Alteração de Senha

### 3.1.3 Área Administrativa
- Cadastro de Produtos
- Cadastro de Funcionários
- Relatórios de Vendas
- Gerenciamento de Estoque

### 3.1.4 Página de Produtos
- Exibição dos Produtos
- Filtro de Busca por Categoria, Preço