<?php include('header.php') ?>
<?php include('nav.php') ?>

<main class="content">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-image: linear-gradient(to right, #145bdd, #0ab90acc); border-radius: 0px 0px 30px 30px;">
            <li class="breadcrumb-item h1 text-white">News Section</li>
        </ol>
    </nav>

    <div class="container">
        Popular News:
        <div class="row-2">
            <div class="card d-flex">
                <img class="mr-2" src="https://picsum.photos/300/200">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>

</main>
<style>
    .row-2 {
        align-items: stretch;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        overflow-x: auto;
        overflow-y: hidden;
        height: 125px;
    }

    .card {

        max-width: 85.00%;
        padding: .75rem;
        margin-bottom: 2rem;
        border: 1;
        margin: 5px;
        flex-basis: 400px;
        flex-grow: 0;
        flex-shrink: 0;
        flex-direction: row;
        flex-wrap: nowrap;
    }

    .card>img {
        margin-bottom: .75rem;
        width: 30%;
    }

    .card-text {
        font-size: 85%;
        overflow: scroll;
        padding-left: 5px;
        padding-right: 16px;
        width: 70%;
    }
</style>
<?php include('footer.php') ?>