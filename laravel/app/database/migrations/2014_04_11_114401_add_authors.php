<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	// inserting and doing queries
		DB::table('authors')->insert(array(
			'name'=>'Andrew Perkins',
			'bio'=>'A really great author.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Mary Lancaster',
			'bio'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies congue arcu, eget tempus lorem porta et. Etiam consequat quis est quis vestibulum. Sed id lectus sem. Proin neque dui, adipiscing eget arcu non, blandit elementum odio. Vivamus sodales neque vel imperdiet lobortis. Nunc consequat justo in mi convallis, id commodo elit feugiat. Nunc accumsan quis quam quis congue.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Kenny Yuen',
			'bio'=>'In faucibus dolor ut purus vestibulum pharetra. Sed eu pretium purus. Nulla luctus id nulla ac accumsan. Suspendisse et tortor interdum, facilisis metus at, dictum augue. Etiam sed dolor purus. Etiam malesuada id sapien a vestibulum. Sed nunc enim, elementum vitae condimentum quis, sagittis et sapien. Mauris et mollis ligula, vitae congue tortor. Integer id libero scelerisque, euismod mi non, vestibulum metus. Praesent dignissim vehicula magna in varius. Proin sodales sed nulla consectetur convallis. Quisque facilisis diam at massa tempor, et ornare nibh facilisis. Vestibulum sodales, enim placerat rhoncus pulvinar, risus justo ullamcorper leo, eu varius lectus mi et tortor.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Mary Wells',
			'bio'=>'Donec vitae mauris posuere, fermentum tellus id, ullamcorper nisi. Nam sit amet nisi nunc. Donec scelerisque nec lacus porta aliquam. Mauris pulvinar urna ac purus euismod, vel aliquam enim tempor. Aliquam non aliquam lorem. Fusce ut odio sed urna pulvinar cursus feugiat vel arcu. Maecenas pellentesque enim et nulla tempor imperdiet. Phasellus tincidunt, ligula nec pulvinar gravida, metus nunc cursus sapien, et commodo mauris risus sed justo.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Jane Doe',
			'bio'=>'Nulla iaculis sodales ultricies. Curabitur nibh lorem, malesuada ac varius quis, accumsan sit amet lectus. Ut porttitor tempor interdum. Nulla faucibus ante in eros ullamcorper faucibus. Nulla elit lorem, commodo non placerat quis, dignissim et nulla. Nam ligula enim, vulputate mattis ornare sed, accumsan sed ante. Aliquam et eros eu leo tincidunt tempus ut eu velit.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Bill Bo',
			'bio'=>'Proin a tincidunt velit. Nam consequat erat eu pharetra auctor. Fusce id sagittis lectus. Fusce nec convallis metus, id consectetur nisi. Fusce orci tellus, venenatis id lorem quis, accumsan facilisis nisl. Fusce at purus vestibulum ipsum fringilla lacinia eu ut risus. Aenean volutpat, lacus ut cursus tincidunt, ante metus gravida orci, vel viverra sapien nisl aliquet urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis sagittis euismod elit sit amet molestie. Sed ullamcorper scelerisque odio sed tempus. Phasellus ornare interdum molestie. Donec urna quam, commodo id orci eu, tincidunt viverra metus.',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->delete(1);
		DB::table('authors')->delete(2);
		DB::table('authors')->delete(3);
		DB::table('authors')->delete(4);
		DB::table('authors')->delete(5);
		DB::table('authors')->delete(6);
	}

}
