<h2>News</h2>
<?php
foreach ($newsList as $key => $news) {
    ++$key;
    echo $news . "&nbsp; <a href='" . route('news.show', ['id' => $key]) . "'>Просмотреть новость</a> <br>";
}
