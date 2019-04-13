 把database/migration下的数据表写入数据库

```
php artison migrate
```

 数据表回滚

```
php artison migrate:rollback
```

 创建一个数据表，表名为article,并写入数据库

```
​    php artisan make:migration create_articles_table  --create=articles`
​    php artison migrate
```

 为创建的数据表添加字段

```
php artisan make:migration add_intro_column_to_articles --table=articles
```

 去文件里添加相应字段，然后执行

```
php artison migrate
```

 创建一个model，Article

```
php artisan make:model Article
```

 创建一个交互界面

```
php artisan tinker
```

 插入数据表数据

```
$article = App\Article::create(['title' => '维达','content'=>'what this', 'ctime'=> Carbon\Carbon::now(),'intro'=>'123']);
```

 获取数据

```
​    $first = App\Article::where('intro', '123')->get();
​    $first = App\Article::find(1);
​    $first = App\Article::where('intro', '123')->first();
```

 清空配置缓存

```
php artisan config:clear
```

 生成缓存

```
php artisan config:cache
```

 表单可以使用illuminate/html 官方的Package：https: github.com/illuminate/html 不适用与5.1之后的版本

```
composer require illuminate/html
```

 安装完成后配置config/app.php
 在config/app.php中的providers添加我们的Service Provider：

```
Illuminate\Html\HtmlServiceProvider::class,
```

 Service Provider添加好了之后，我们来添加我们的Facade，也就是在aliases这个数值后面添加：

```
 'Form'      => Illuminate\Html\FormFacade::class,
```

```
@section('content')
<h1>撰写新文章</h1>

{!! Form::open() !!}

{!! Form::close() !!}
@endsection
```

移除当前安装的，并更新composer
```
composer remove illuminate/html

composer update
```

5.1之后的版本

```
composer require laravelcollective/html
```
在/config/app.php的providers数组中添加下面的这句
```
'providers'=>[
// ...
Collective\Html\HtmlServiceProvider::class,
// ...
],
```
在/config/app.php的aliases数组中添加下面的这两句
```
'aliases'=>[
// ...
'Form'=>Collective\Html\FormFacade::class,
'Html'=>Collective\Html\HtmlFacade::class,
// ...
],
```

代码书写格式
```
{!!Form::open(array('url'=>'foo/bar'))!!}

//

{!!Form::close()!!}
```
