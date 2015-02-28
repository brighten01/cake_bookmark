# CakePHP 入门例子  书签添加

# 使用方法 
````
建立数据库 cake_bookmarks 并且导入

# 服务器配置
1. nginx 配置
````
location / {
 root  E:/cakeblog/webroot; # 网站根目录根据自己的选定
 index  index.html index.htm index.php ;
 if (!-e $request_filename){
 	rewrite ^/(.*) /index.php last;
 }
}
 
 2. apache 配置
 ````
  根目录需要有htaccess文件
  开启虚拟目录
  然后配置虚拟目录指向
  <VirtualHost *:80>
    ServerName report.xdf.cn
    DocumentRoot E:/cakeblog/webroot;
    <Directory E:/cakeblog/webroot;> 
        Options FollowSymLinks 
        AllowOverride None
        Options +indexes
        Allowoverride all
    </Directory> 
    
</VirtualHost>
  
3. 数据库配置
````
config 目录下app.php  中配置 Datasources 数组 中的default 改成自己的数据库用户名和密码设置值

4. 数据库如果没有设置密码 修改方式 
````
1. 进入msyql 命令行
2. use mysql 
3. update user set password = PASSWORD(你的密码)  where user='root' (也可以是其他的用户 ，这里是方便本机配置)
4. flush privileges
 
#其他说明  
cakephp 官方入门实例


