//把database/migration下的数据表写入数据库
php artison migrate

//数据表回滚
php artison migrate:rollback

//创建一个数据表，表名为article,并写入数据库
php artisan make:migration create_articles_table  --create=articles`
php artison migrate

//为创建的数据表添加字段
php artisan make:migration add_intro_column_to_articles --table=articles
//去文件里添加相应字段，然后执行
php artison migrate

//创建一个model，Article
php artisan make:model Article

//创建一个交互界面
php artisan tinker

//插入数据表数据
$article = App\Article::create(['title' => '维达','content'=>'what this', 'ctime'=> Carbon\Carbon::now(),'intro'=>'123']);

//获取数据
$first = App\Article::where('intro', '123')->get();
$first = App\Article::find(1);
$first = App\Article::where('intro', '123')->first();
