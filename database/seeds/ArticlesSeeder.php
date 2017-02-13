<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	// 1
    	DB::insert('INSERT INTO `articles`(`name`, `text`, `img`) VALUES(?, ?, ?)', [
    		'Blog post',
    		'<p>У Laravel есть механизм наполнения вашей БД начальными данными (seeding) с помощью специальных классов. 
    		Все такие классы хранятся в database/seeds. Они могут иметь любое имя, но вам, вероятно, следует придерживаться 
    		какой-то логики в их именовании — например, UserTableSeeder и т.д. По умолчанию для вас уже определён класс DatabaseSeeder. 
    		Из этого класса вы можете вызывать метод call() для подключения других классов с данными, что позволит 
    		вам контролировать порядок их выполнения.</p>',
    		'pic1.jpg'
    	]);

    	// 2
    	DB::table('articles')->insert(
    		[
    			[
    				'name' => 'Sample blog post',
    				'text' => '<p>Конечно, ручное определение признаков для каждой модели начальных данных затруднительно. 
	    				Вместо этого вы можете использовать фабрики моделей для быстрой генерации больших объёмов данных. 
	    				Во-первых, пересмотрите документацию по фабрике моделей, чтобы изучить, как определяются фабрики. 
	    				Как только вы определите свои фабрики, вы можете использовать вспомогательную функцию factory(), 
	    				чтобы вставлять записи в вашу базу данных.</p>',
    				'img' => 'pic2.jpg'
    			],
    			[
    				'name' => 'Запуск загрузки начальных данных',
    				'text' => '<p>Как только вы написали свои классы загрузки, вы можете использовать Artisan-команду db:seed для запуска загрузки. 
    					По умолчанию команда db:seed вызывает класс DatabaseSeeder, который может быть использован для вызова других классов, 
    					заполняющих БД данными. Однако, вы можете использовать параметр --class для указания конкретного класса для вызова:
							php artisan db:seed
							php artisan db:seed --class=UserTableSeeder
						Вы также можете использовать для заполнения БД данными команду migrate:refresh, которая также откатит и заново применит все ваши миграции:
							php artisan migrate:refresh --seed</p>',
					'img' => 'pic3.jpg'
    			]
    		]
    	);

		// 3
		Article::create([
			'name' => 'Sample blog post 3',
			'text' => 'Hello World',
			'img' => 'pic4.jpg'
		]);


    }
}
