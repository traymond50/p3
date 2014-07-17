<?php

/*--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------*/
Route::get('/', function()
{
	return View::make('index');
});

/*--------------------------------------------------------------------------
| Lorem-Ipsum and Random User Landing Pages
|--------------------------------------------------------------------------*/
Route::get('/{operation}',function($operation)
{
	echo View::make($operation);
});

/*--------------------------------------------------------------------------
| Lorem-Ipsum Results Page
|--------------------------------------------------------------------------*/
Route::post('/lorem-ipsum',function()
{
	echo View::make('lorem-ipsum');
	if ($_POST['paragraphs'] > 0 && $_POST['paragraphs'] < 100)
	{
		$generator = new Badcow\LoremIpsum\Generator();
		$words = $generator->getParagraphs($_POST['paragraphs']);
		echo "<div class=lorem-ipsum>";
		echo implode('<p>', $words);
		echo "</div>";
	}

});

/*--------------------------------------------------------------------------
Random User Results Page
|--------------------------------------------------------------------------*/
Route::post('/random-user',function()
{
	$faker = Faker\Factory::create();
	$birthdate = Input::get('birthdate','off');
	$profile = Input::get('profile','off');
	echo View::make('random-user');
	if ($_POST['users'] > 0 && $_POST['users'] < 100)
	{
		echo "<div class='random-user'>";
		for($i =0; $i < $_POST['users']; $i++)
		{
			echo $faker->name."<br>";
			if($birthdate == 'on')
			{
				echo $faker->date."<br>";
			}
			if($profile == 'on')
			{
				echo $faker->text."<br>";
			}
			echo '<br>';
		}
		echo "</div>";
	};
});