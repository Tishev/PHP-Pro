<?php

use GeekBrains\LevelTwo\Blog\Commands\Arguments;
use GeekBrains\LevelTwo\Blog\Commands\CreateUserCommand;
use GeekBrains\LevelTwo\Blog\Post;
use GeekBrains\LevelTwo\Blog\Repositories\UsersRepository\SqliteUsersRepository;
use GeekBrains\LevelTwo\Blog\UUID;
use GeekBrains\LevelTwo\Blog\Repositories\PostsRepository\SqlitePostsRepository;

require_once __DIR__ . '/vendor/autoload.php';

try {
    //Создаём объект подключения к SQLite
    $connection = new PDO('sqlite:' . __DIR__ . '/blog.sqlite');


    $postRepository = new SqlitePostsRepository($connection);

    $post = $postRepository->get(new UUID('d02eef69-1a06-460f-b859-202b84164734'));
    echo $post;
    echo $post->getUser();
    /*$post = new Post(
        UUID::random(),
        UUID::random(),
        $faker->realText(rand(20, 30)),
        $faker->realText(rand(200, 280))
    );

    $postRepository->save($post);*/

//Создаём объект репозитория
    //$usersRepository = new SqliteUsersRepository($connection);
    // $usersRepository = new InMemoryUsersRepository();

    // $command = new CreateUserCommand($usersRepository);


    //  $command->handle(Arguments::fromArgv($argv));

    // $user = $usersRepository->getByUsername('ivan');
    // print $user;
    // $usersRepository->save(new User(UUID::random(), 'admin', new Name('Ivan', 'Nikitin')));
    // echo $usersRepository->getByUsername('admin');
//$usersRepository->save(new User(2, new Name('Anna', 'Petrova')));

} catch (Exception $exception) {
    echo $exception->getMessage();
}
