<?php
try {
    $dsn = "mysql:host=localhost;dbname=oop;charset=UTF8";
    $pdo = new PDO($dsn, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Невозможно подключиться к серверу баз данных: ' . $e->getMessage());
}

class ShopProduct
{
    public function __construct(
        private string $title = "",
        private string $producerFirstName = "",
        private string $producerMainName = "",
        private int|float $price = 0
    ) 
    {
    }
    public function getProducerFirstName(): string
    {
        return $this->producerFirstName;

    }
    public function setProducerFirstName(string $producerFirstName): void
    {
        $this->producerFirstName = $producerFirstName;
        
    }
    public function getProducerMainName(): string
    {
        return $this->producerMainName;

    }
    public function setProducerMainName(string $producerMainName): void
    {
        $this->producerMainName = $producerMainName;
    }
    public function getTitle(): string 
    {
        return $this->title;
    }
    public function setTitle(string $title): void 
    {
        $this->title = $title;
    }
    public function getPrice(): int|float 
    {
        return ($this->price);
    }
    public function setPrice(int|float $price): void 
    {
        $this->price = $price;
    }
    public function actionCreate(PDO $pdo): void 
    {
        try {
            $stmt = $pdo->prepare("INSERT INTO products(title, firstname, mainname, price) VALUES (?, ?, ?, ?)");
            $stmt->execute([$this->title, $this->producerFirstName, $this->producerMainName, $this->price]);
        } catch (PDOException $e) {
            die('Ошибка при выполнении запроса для ShopProduct: ' . $e->getMessage());
        }
    }
    
}

class CDProduct extends ShopProduct
{
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        int|float $price = 0,
        private int $playLength = 0
    ) 
    {
        parent::__construct($title, $firstName, $mainName, $price);
    }
    public function getPlayLength(): int 
    {
        return $this->playLength;
    }
    public function setPlayLength(int $playLength): void 
    {
        $this->playLength = $playLength;
    }
    public function getSummaryLine(): string 
    {
        return "Аудиокнига: {$this->getTitle()} ({$this->getProducerMainName()} {$this->getProducerFirstName()}) {$this->playLength} мин. - {$this->getPrice()}";
    }
    public function actionCreate(PDO $pdo): void 
    {
        try {
            parent::actionCreate($pdo);
            $stmt = $pdo->query("SELECT id FROM products ORDER BY id DESC");
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = $pdo->prepare("INSERT INTO cd(product_id, playlength) VALUES (?, ?)");
            $stmt->execute([$product['id'], $this->playLength]);
        } catch (PDOException $e) {
            die('Ошибка при выполнении запроса для CDProduct: ' . $e->getMessage());
        }
    }
}

class BookProduct extends ShopProduct
{
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        int|float $price = 0,
        private int $numPages = 0
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
    }
    public function getNumPages(): int 
    {
        return $this->numPages;
    }
    public function setNumPages(int $numPages): void 
    {
        $this->numPages = $numPages;
    }
    public function getSummaryLine(): string 
    {
        return "Книга: {$this->getTitle()} ({$this->getProducerMainName()} {$this->getProducerFirstName()}) {$this->numPages} стр. - {$this->getPrice()}";
    }
    public function actionCreate(PDO $pdo): void 
    {
        try {
            parent::actionCreate($pdo);
            $stmt = $pdo->query("SELECT id FROM products ORDER BY id DESC");
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = $pdo->prepare("INSERT INTO book(product_id, numpages) VALUES (?, ?)");
            $stmt->execute([$product['id'], $this->numPages]);
        } catch (PDOException $e) {
            die('Ошибка при выполнении запроса для BookProduct: ' . $e->getMessage());
        }
    }
}

class ShopProductWriter {
    public function write(ShopProduct $shopProduct): void 
    {
        $str = "{$shopProduct->getSummaryLine()}<br>";
        print $str;
    }
}

// $cdProduct = new CDProduct("Собачье сердце", "Михаил", "Булгаков", 5.99, 240);
// $cdProduct->actionCreate($pdo);
// $cdWriter = new ShopProductWriter();
// $cdWriter->write($cdProduct);
// print "<pre>";
// var_dump($cdProduct);
// print "</pre>";

// $bookProduct = new BookProduct("Белая гвардия", "Михаил", "Булгаков", 7.99, 300);
// $bookProduct->actionCreate($pdo);
// $bookWriter = new ShopProductWriter();
// $bookWriter->write($bookProduct);
// print "<pre>";
// var_dump($bookProduct);
// print "</pre>";