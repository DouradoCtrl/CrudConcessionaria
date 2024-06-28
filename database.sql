-- Tabela de Clientes
CREATE TABLE Cliente (
    ClienteID INT PRIMARY KEY,
    Nome VARCHAR(100),
    CPF VARCHAR(11) UNIQUE,
    Telefone VARCHAR(20),
    Email VARCHAR(100)
);

-- Tabela de Funcionários
CREATE TABLE Funcionario (
    FuncionarioID INT PRIMARY KEY,
    Nome VARCHAR(100),
    Cargo VARCHAR(50),
    Salario DECIMAL(10, 2)
	);

-- Tabela de Veículos
CREATE TABLE Veiculo (
    VeiculoID INT PRIMARY KEY,
    Modelo VARCHAR(50),
    Marca VARCHAR(50),
    Ano INT,
    Preco DECIMAL(10, 2),
    Estoque INT
);

-- Tabela de Categorias de Veículos
CREATE TABLE CategoriaVeiculo (
    CategoriaID INT PRIMARY KEY,
    Nome VARCHAR(50)
);

-- Relacionamento entre Veículo e Categoria
CREATE TABLE VeiculoCategoria (
    VeiculoID INT,
    CategoriaID INT,
    PRIMARY KEY (VeiculoID, CategoriaID),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculo(VeiculoID),
    FOREIGN KEY (CategoriaID) REFERENCES CategoriaVeiculo(CategoriaID)
);

-- Tabela de Vendas
CREATE TABLE Venda (
    VendaID INT PRIMARY KEY,
    DataVenda DATE,
    ClienteID INT,
    ValorTotal DECIMAL(10, 2),
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID)
);

-- Tabela de Itens da Venda
CREATE TABLE ItemVenda (
    ItemVendaID INT PRIMARY KEY,
    VendaID INT,
    VeiculoID INT,
    Quantidade INT,
    PrecoUnitario DECIMAL(10, 2),
    PRIMARY KEY (VendaID, VeiculoID),
    FOREIGN KEY (VendaID) REFERENCES Venda(VendaID),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculo(VeiculoID)
);

-- Tabela de Serviços
CREATE TABLE Servico (
    ServicoID INT PRIMARY KEY,
    Descricao VARCHAR(100),
    Preco DECIMAL(10, 2)
);

-- Tabela de Manutenções
CREATE TABLE Manutencao (
    ManutencaoID INT PRIMARY KEY,
    VeiculoID INT,
    DataManutencao DATE,
    Descricao TEXT,
    Preco DECIMAL(10, 2),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculo(VeiculoID)
);

-- Tabela de Financiamentos
CREATE TABLE Financiamento (
    FinanciamentoID INT PRIMARY KEY,
    VendaID INT,
    Parcelas INT,
    TaxaJuros DECIMAL(5, 2),
    FOREIGN KEY (VendaID) REFERENCES Venda(VendaID)
);

-- Tabela de Pagamentos de Financiamentos
CREATE TABLE PagamentoFinanciamento (
    PagamentoID INT PRIMARY KEY,
    FinanciamentoID INT,
    DataPagamento DATE,
    ValorPago DECIMAL(10, 2),
    FOREIGN KEY (FinanciamentoID) REFERENCES Financiamento(FinanciamentoID)
);

-- Tabela de Test Drives
CREATE TABLE TestDrive (
    TestDriveID INT PRIMARY KEY,
    ClienteID INT,
    VeiculoID INT,
    DataAgendamento DATE,
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculo(VeiculoID)
);

-- Tabela de Seguros
CREATE TABLE Seguro (
    SeguroID INT PRIMARY KEY,
    VeiculoID INT,
    Seguradora VARCHAR(100),
    ValorAnual DECIMAL(10, 2),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculo(VeiculoID)
);

-- Tabela de Trocas
CREATE TABLE Troca (
    TrocaID INT PRIMARY KEY,
    VeiculoAntigoID INT,
    VeiculoNovoID INT,
    DataTroca DATE,
    ValorAdicional DECIMAL(10, 2),
    FOREIGN KEY (VeiculoAntigoID) REFERENCES Veiculo(VeiculoID),
    FOREIGN KEY (VeiculoNovoID) REFERENCES Veiculo(VeiculoID)
);

-- Tabela de Relacionamento Cliente-Funcionário
CREATE TABLE ClienteFuncionario (
    ClienteID INT,
    FuncionarioID INT,
    PRIMARY KEY (ClienteID, FuncionarioID),
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID),
    FOREIGN KEY (FuncionarioID) REFERENCES Funcionario(FuncionarioID)
);

-- Tabela de Relacionamento Cliente-Veículo
CREATE TABLE ClienteVeiculoFavorito (
    ClienteID INT,
    VeiculoID INT,
    PRIMARY KEY (ClienteID, VeiculoID),
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID),
    FOREIGN KEY (VeiculoID) REFERENCES Veiculo(VeiculoID)
);

-- Tabela de Relacionamento Funcionário-Venda
CREATE TABLE FuncionarioVenda (
    FuncionarioID INT,
    VendaID INT,
    PRIMARY KEY (FuncionarioID, VendaID),
    FOREIGN KEY (FuncionarioID) REFERENCES Funcionario(FuncionarioID),
    FOREIGN KEY (VendaID) REFERENCES Venda(VendaID)
);

-- Tabela de Relacionamento Cliente-Seguro
CREATE TABLE ClienteSeguro (
    ClienteID INT,
    SeguroID INT,
    PRIMARY KEY (ClienteID, SeguroID),
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID),
    FOREIGN KEY (SeguroID) REFERENCES Seguro(SeguroID)
);

-- Tabela de Relacionamento Cliente-Test Drive
CREATE TABLE ClienteTestDrive (
    ClienteID INT,
    TestDriveID INT,
    PRIMARY KEY (ClienteID, TestDriveID),
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID),
    FOREIGN KEY (TestDriveID) REFERENCES TestDrive(TestDriveID)
);