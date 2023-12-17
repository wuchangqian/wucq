
openssl rsa -pubout -in vagrant.key.rsa -out id_rsa.pem
ssh-keygen -f id_rsa.pem -i -mPKCS8 > id_rsa.pub

在Vagrantfile配置文件中添加了两行代码，使用明文用户名密码

config.ssh.username = "vagrant"
config.ssh.password = "vagrant"