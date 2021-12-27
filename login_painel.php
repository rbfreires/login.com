<?php
// session_start();
include('includes/header.php');
include('verifica_login.php');
?>
<div class="container-fluid painel_login">
    <h1>Olá, <?php echo $_SESSION['usuario']; ?>!</h1>
    <div class="container">
        <h2>Lorem ipsum dolor sit</h2>
        <div class="paragraph">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi distinctio, deserunt molestias quisquam quod rem cumque. Sint, sit asperiores, et delectus rem nostrum ipsam voluptatum nesciunt id eaque accusantium dolores. Incidunt, quisquam repellendus! Totam quaerat odit deserunt quidem nobis expedita vitae at similique ratione sunt explicabo harum temporibus eligendi nihil ab tempore sapiente delectus incidunt id, alias necessitatibus debitis? Totam vel modi fugiat? Saepe, ea officiis. Assumenda, modi ad, reprehenderit nobis eaque sapiente optio beatae doloribus quam et totam officiis ratione amet excepturi nam suscipit vitae mollitia sint perspiciatis at laboriosam ipsa explicabo nihil eius? Doloribus velit odio soluta magni! Maiores itaque molestias inventore, reprehenderit incidunt expedita saepe voluptates soluta facilis earum autem fugiat esse quia necessitatibus modi nesciunt veritatis mollitia qui praesentium debitis temporibus blanditiis, non reiciendis dicta! Aliquid autem molestias molestiae dolor magni qui corrupti voluptates repellat id. Dolorem est qui expedita, nihil fugit ea dolores voluptatum maxime sed libero tempora vero dolorum tenetur neque nulla porro, quaerat omnis. Atque tempora inventore culpa repudiandae necessitatibus officia magnam laudantium, officiis dolor, ea voluptatibus, repellat perspiciatis. Ullam assumenda, architecto facere nesciunt ad minus vel reiciendis quae vero optio odio incidunt laborum mollitia explicabo sed odit numquam earum quia animi. Cupiditate!</p><br><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aliquid provident fugit nisi soluta excepturi at, odio, molestiae similique atque dolore mollitia omnis numquam, enim quidem minus magnam voluptatum voluptates porro dolorem pariatur architecto? Reprehenderit nisi id facere officiis magni tempore voluptatibus in doloribus. Corrupti autem voluptates error facere quidem accusantium. Sit dolor laboriosam delectus neque. Necessitatibus mollitia id dignissimos deleniti est adipisci porro. Debitis reiciendis, libero excepturi optio dolore corrupti id eius numquam laborum quasi facilis, est iure, voluptates dicta atque dolor qui dignissimos ipsum a cupiditate soluta consequuntur repellat cumque quidem. Possimus laudantium dicta maxime nulla obcaecati asperiores nesciunt! Eum eligendi sequi quas, alias repellat, quisquam natus est dolor molestiae nostrum soluta reprehenderit magnam voluptatibus officiis explicabo saepe placeat praesentium ducimus obcaecati voluptas. Deserunt harum eligendi, nostrum labore alias corrupti architecto repellendus voluptas excepturi adipisci temporibus neque ex distinctio, accusantium nulla minus nihil! Saepe nisi eligendi labore omnis optio quis perferendis quisquam quas exercitationem ratione dolores, temporibus aliquid esse, aspernatur cupiditate molestias fugiat quam blanditiis sint? Facere nihil nulla voluptate veritatis architecto nemo eum officia ullam fugiat nam ex asperiores atque rerum modi enim consequuntur fuga repudiandae quam numquam earum, aliquam omnis voluptas? Dignissimos distinctio tempora sit delectus?</p>
        </div>
    </div>
    <a href="logout.php" class="btn btn-outline-danger" role="button">Logout</a>
</div>
<?php
include('includes/footer.php');
?>
