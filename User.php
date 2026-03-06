<?php
class User{
    private $name;
    private $email;
    private $password;

    
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Getter
    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    // Method
    public function login($inputEmail, $inputPassword){
        if ($inputEmail === $this->email && $inputPassword === $this->password) {
            return "Đăng nhập thành công";
        } else {
            return "Sai thông tin";
        }
    }
}


$user = new User("Nguyen Van A", "a@gmail.com", "123456");

echo "Tên: " . $user->getName() . "<br>";
echo "Email: " . $user->getEmail() . "<br>";
echo $user->login("a@gmail.com", "123456");
?>
