# CakePHP Application Skeleton

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.0.

This is an unstable repository and should be treated as an alpha.

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist -s dev cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist -s dev cakephp/app [app_name]
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.


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
 进入msyql 命令行
 use mysql 
 update user set password = PASSWORD(你的密码)  where user='root' (也可以是其他的用户 ，这里是方便本机配置)
 flush privileges
 
#其他说明  
cakephp 官方入门实例


