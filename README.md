# Sistema de Controle de Estoque e Vendas de Óculos - Geek Glasses

## 1. Objetivos do Sistema

### 1.1 Objetivo Principal
- O objetivo principal do sistema é realizar o controle de estoque e vendas de óculos, identificando as funcionalidades essenciais e os dados necessários para gerenciar de forma eficiente as operações da loja. Ele permitirá o cadastro de produtos e funcionários, o registro de vendas e a geração de relatórios que facilitarão a análise e a tomada de decisões estratégicas.

### 1.2 Objetivos Específicos
Cadastro de Funcionários:
- Gerenciar dados completos de funcionários, incluindo permissões de acesso de acordo com o perfil (administrador, vendedor, estoquista e financeiro).

Cadastro de Óculos:
- Registrar informações detalhadas dos produtos disponíveis, como marca, modelo, tipo de lente e preço.

Registro de Vendas:
- Armazenar dados de transações realizadas, incluindo produtos vendidos, vendedor responsável e total da venda.

Emissão de Relatórios:
- Gerar relatórios analíticos sobre estoque, vendas e desempenho dos funcionários.

## 2. Dados Mantidos no Sistema

### 2.1 Cadastro de Funcionários
Os dados registrados para funcionários incluem:
- Nome completo
- Nacionalidade e naturalidade
- CPF e RG
- Telefone
- Data de registro
- Endereço
- Login e senha
- Função do funcionário

### 2.2 Cadastro de Óculos
Os dados registrados para os óculos incluem:
- Nome, marca e modelo do produto
- Tipo de óculos (grau, leitura, sol, etc.)
- Cor da armação e material
- Cor e tipo da lente
- Preço
- Imagem do produto

### 2.3 Registro de Vendas
Os dados registrados para cada venda incluem:
- Data da venda
- Produtos vendidos (nome e quantidade)
- Funcionário responsável pela venda
- Total da venda

## 3. Fluxo de Trabalho
- O estoquista cadastra os óculos no sistema, com informações completas sobre os produtos.
- O vendedor registra a venda no sistema, inserindo os dados do produto, quantidade e o total da venda.
- O sistema atualiza automaticamente o estoque, reduzindo a quantidade dos itens vendidos.
- O sistema gera relatórios que incluem:
- Faturamento mensal.
- Funcionários ativos e inativos.
- Produtos que estão no estoque.

## 4. Funcionamento do Sistema

### 4.1 Acesso ao Sistema
O sistema possui níveis de acesso conforme o perfil do usuário:
- Administrador: Acesso total a todas as funcionalidades.
- Vendedor: Acesso apenas ao módulo de vendas.
- Estoquista: Acesso ao módulo de gerenciamento de estoque.
- Financeiro: Acesso exclusivo aos relatórios financeiros.

### 4.2 Módulo de Funcionários
- Cadastro de novos funcionários.
- Atualização de informações e alteração de status.
- Definição de permissões de acesso.

### 4.3 Módulo de Produtos
- Cadastro e atualização de produtos no estoque.
- Controle de informações detalhadas dos óculos.

### 4.4 Módulo de Vendas
- Registro de transações, incluindo produtos vendidos e vendedor responsável.
- Atualização automática do estoque com base nas vendas.

### 4.5 Módulo de Relatórios
Relatórios gerenciais, como:
- Produtos em estoque (incluindo itens com baixa quantidade).
- Funcionários ativos e inativos.
- Faturamento total por período e por vendedor.
---

## 5. Diagrama do Modelo Entidade-Relacionamento (MER)

O diagrama a seguir mostra a relação entre as entidades do sistema, incluindo **Funcionários**, **Produtos**, **Vendas** e **Relatórios**:

### 5.1 Conceitual
<img src="/imagens_readme/mer_conceitual.png" alt="Diagrama MER Conceitual" width="817" height="535">

### 5.2 Lógico
<img src="/imagens_readme/mer_logico.png" alt="Diagrama MER Logico">
