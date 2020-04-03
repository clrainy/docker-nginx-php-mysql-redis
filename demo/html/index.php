<?php
// Docker-LNMP

$dbms='mysql';     //数据库类型
$host='mysql'; //数据库主机名,这里使用的是数据库的容器名称，不可以使用localhose或者127.0.0.1
$dbName='test';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='123456';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    echo "<center><h2>Mysql连接成功</h2></center><br/>";

    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}



$redis = new Redis();  
$result = $redis->connect('redis', 6379);  
if ($result) {
	echo '<center><h2>成功通过 PHP 连接到 Redis </h2></center>' . PHP_EOL;
}
// $redis->auth('123456');
$redis->set('key1', 'val1');
echo '<center><h2>Set Redis: key1 = ' . $redis->get('key1') . '</h2></center>' . PHP_EOL;

phpinfo();
