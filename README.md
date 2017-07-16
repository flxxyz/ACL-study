# Laravel - ACL学习
laravel ACL 学习实现过程，权限设计管理

权限还是个很关键的东西呀，自己似乎对站点程序结构与权限设计管理，有一些理解了

- - - -

> 2017.07.16 更新 设计与实现简单权限管理，使用 [ultraware/roles][1]



实现当中的问题：
- 因为package中有**User**这个命名空间，所以我在使用中PHPstom一直显示**User**存在
- 在控制器中使用`!$user->hasRole('admin')`，限制只允许admin权限的用户访问
- 使用自带的**User**需要按下面的方式来添加

```
use Illuminate\Database\Eloquent\Model;
use Ultraware\Roles\Traits\HasRoleAndPermission;
use Ultraware\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;

class User extends Model implements HasRoleAndPermissionContract
{
    use HasRoleAndPermission;
```

- 数据库迁移报长度过长的话，你需要这样设置

```
// app/Providers/AppServiceProvider.php
public function boot()
{
    Schema::defaultStringLength(128);
}
```



[1]: https://github.com/ultraware/roles
