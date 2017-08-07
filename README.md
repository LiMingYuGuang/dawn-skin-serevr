# Dawn Skin Server

超轻量的 Minecraft 皮肤站，仅仅保留最基本的功能，现在，回应您的等待。

Dawn Skin Server 基于 [XPHP](https://github.com/xtlsoft/XPHP) 与 [XDO](https://github.com/xtlsoft/XDO) 打造，无需 MySQL 等数据库与安装，真正做到开箱即用。

# 注意

这仍是一个早期的测试版本，请**尽量不要用于生产环境**

# 环境要求

- 一台支持 URL 重写并具有写入权限的服务器，Nginx、Apache 或其他
- PHP >= 5.5.38（未具体测试）

# 服务器配置

如果你使用 Apache 作为 web 服务器（大部分的虚拟主机），那么恭喜你，无需任何配置~

如果你使用 Nginx，请在你的 nginx.conf 中加入如下规则：
```
if (!-e $request_filename) {
    rewrite ^(.*)$ /index.php$1 last;
}

# Protect data
location ^~ /Var/ {
    deny all;
}
```

# 版权

Dawn Skin Server 程序是基于 GNU General Public License v3.0 开放源代码的自由软件，你可以遵照 GPLv3 协议来修改和重新发布这一程序。

程序原作者为 [@LiMingYuGuang](https://emiria.moe/)，转载请注明。

*此 README 基于 [Blessing Skin Server](https://github.com/printempw/blessing-skin-server) 修改*