<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon - Liste des épisodes</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
</head>

<body>
<header>
    <section class="menu">
        <span class="logopad"><img class="logo" src="img/logo.png" /></span>
        <nav>
            <section class="navbar">
                <a href="index.html">Accueil</a>
                <a href="episodes.html">Liste épisodes</a>
                <a href="notes.html">Notes/Détails</a>
                <a href="search.php">Chercher un épisode</a>
            </section>
        </nav>
    </section>
</header>
<section class="aidenav">
    <section>
        <h1>Chercher un épisode</h1>
        <form autocomplete="off" action="search.php" method="get">
            <input type="text" name="episode" placeholder="Saisir un nom d'épisode">
            <button type="submit" name="submit">Chercher</button>
        </form>
        <?php
        $isFirstElement = True;
        $isFound = False;
        $file = 'data/episodes.txt';
        if (isset($_GET['submit'])){
            $episode = $_GET['episode'];
            echo '<h3>Résultats pour : '.$episode.'</h3>';
            echo"</section>";
            echo"</section>";
            $fn = fopen($file,'r');
            while(! feof($fn)){
                $line = explode('|',fgets($fn),6);
                if($line[2]==$episode||$line[1]==$episode){
                    $isFound = True;
                    if($isFirstElement=True){
                        echo '<table class="eps">';
                        echo '<tr>';
                        echo '<th style="background: red; color: #fff;" width="8%">Saison</th>';
                        echo '<th style="background: red; color: #fff;" width="8%">N°</th>';
                        echo '<th style="background: red; color: #fff;" width="26%">Titre français</th>';
                        echo '<th style="background: red; color: #fff;" width="30%">Titre japonais</th>';
                        echo '<th style="background: red; color: #fff;" width="13%">Diffusion japonaise</th>';
                        echo '<th style="background: red; color: #fff;" width="13%">Diffusion française</th>';
                        echo '<th style="background: red; color: #fff;" width="23%">Statut</th>';
                        echo '</tr>';
                        $isFirstElement=False;
                    }
                        echo'<tr>';
                        echo'<td>',$line[0],'</td>';
                        echo'<td>',$line[1],'</td>';
                        echo'<td><i>',$line[2],'</i></td>';
                        echo'<td><i>',$line[3],'</i></td>';
                        echo'<td>',$line[4],'</td>';
                        echo'<td>',$line[5],'</td>';
                        echo'<td><img src="img/ok.png"></td>';
                        echo'</tr>';
                }
            }
            fclose($fn);
//                echo '</tbody>';
                echo '</table>';
//            }
        }
        ?>

<!--<section class="s1">
    <h1 id="Saison1"><img src="img/1.png"></h1>
    <p>83 épisodes, 1 film & 1 TV spécial</p>
    <input class="affichage" type="button" value="Afficher / Masquer" onClick="AfficherMasquer1()" /><br>
    <img src="img/bar01.png">
</section>
<section class="saison1" id="saison1">
    <table class="eps">
        <tbody>
        <tr>
            <th rowspan="2" style="background: red; color: #fff;" width="8%">N° épisodes <br>(sur la saison)
            </th>
            <th colspan="2" style="background: red; color: #fff;" width="8%">N° épisodes
            </th>
            <th rowspan="2" style="background: red; color: #fff;" width="26%">Titre français
            </th>
            <th rowspan="2" style="background: red; color: #fff;" width="30%">Titre japonais
            </th>
            <th rowspan="2" style="background: red; color: #fff;" width="13%">Diffusion japonaise
            </th>
            <th rowspan="2" style="background: red; color: #fff;" width="13%">Diffusion française
            </th>
            <th rowspan="2" style="background: red; color: #fff;" width="23%">Statut
            </th>
        </tr>
        <tr>
            <th style="background: red; color: #fff;" width="4%">Japon
            </th>
            <th style="background: red; color: #fff;" width="4%">France
            </th>
        </tr>
        <tr>
            <td>1</td>
            <td colspan="2">1
            </td>
            <td><i>Le départ</i>
            </td>
            <td><i>ポケモン！きみにきめた&nbsp;!</i>
            </td>
            <td>1er avril 1997
            </td>
            <td>5 septembre 1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>2</td>
            <td colspan="2">2
            </td>
            <td><i>Pokémon aux urgences</i>
            </td>
            <td><i>たいけつ！ポケモンセンター！</i>
            </td>
            <td>8 avril 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>3</td>
            <td colspan="2">3
            </td>
            <td><i>Capture du premier Pokémon</i>
            </td>
            <td><i>ポケモン ゲットだぜ！</i>
            </td>
            <td>15 avril 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>4</td>
            <td colspan="2">4
            </td>
            <td><i>Le défi du samouraï</i>
            </td>
            <td><i>サムライしょうねんのちょうせん！</i>
            </td>
            <td>22 avril 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>5</td>
            <td colspan="2">5
            </td>
            <td><i>Confrontation à Argenta</i>
            </td>
            <td><i>ニビジムのたたかい！</i>
            </td>
            <td>29 avril 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>6</td>
            <td colspan="2">6
            </td>
            <td><i>La Pierre Lune</i>
            </td>
            <td><i>ピッピとつきのいし</i>
            </td>
            <td>6 mai 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>7</td>
            <td colspan="2">7
            </td>
            <td><i>Les fleurs d'eau d'Azuria</i>
            </td>
            <td><i>ハナダシティのすいちゅうか</i>
            </td>
            <td>13 mai 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>8</td>
            <td colspan="2">8
            </td>
            <td><i>Le chemin qui conduit à la Ligue Pokémon</i>
            </td>
            <td><i>ポケモンリーグへのみち</i>
            </td>
            <td>20 mai 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>9</td>
            <td colspan="2">9
            </td>
            <td><i>L'école crève-cœur</i>
            </td>
            <td><i>ポケモンひっしょうマニュアル</i>
            </td>
            <td>27 mai 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>10</td>
            <td colspan="2">10
            </td>
            <td><i>Le village caché</i>
            </td>
            <td><i>かくれざとのフシギダネ</i>
            </td>
            <td>3 juin 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>11</td>
            <td colspan="2">11
            </td>
            <td><i>Le Pokémon abandonné</i>
            </td>
            <td><i>はぐれポケモン・ヒトカゲ</i>
            </td>
            <td>10 juin 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>12</td>
            <td colspan="2">12
            </td>
            <td><i>Sans maître, ni loi</i>
            </td>
            <td><i>ゼニガメぐんだんとうじょう！</i>
            </td>
            <td>17 juin 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>13</td>
            <td colspan="2">13
            </td>
            <td><i>Le mystère du phare</i>
            </td>
            <td><i>マサキのとうだい</i>
            </td>
            <td>24 juin 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>14</td>
            <td colspan="2">14
            </td>
            <td><i>Confrontation électrique</i>
            </td>
            <td><i>でんげきたいけつ！クチバジム</i>
            </td>
            <td><abbr class="abbr" title="Premier">1er</abbr> juillet 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>15</td>
            <td colspan="2">15
            </td>
            <td><i>Bataille à bord du Sainte Anne</i>
            </td>
            <td><i>サントアンヌごうのたたかい！</i>
            </td>
            <td>8 juillet 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>16</td>
            <td colspan="2">16
            </td>
            <td><i>Naufrage Pokémon</i>
            </td>
            <td><i>ポケモンひょうりゅうき！</i>
            </td>
            <td>15 juillet 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>17</td>
            <td colspan="2">17
            </td>
            <td><i>L'île des Pokémon géants</i>
            </td>
            <td><i>きょだいポケモンのしま!?</i>
            </td>
            <td>22 juillet 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>18</td>
            <td>18
            </td>
            <td>-
            </td>
            <td><i>La beauté et la plage</i>
            </td>
            <td><i>アオプルコのきゅうじつ</i>
            </td>
            <td>29 juillet 1997
            </td>
            <td><i><a>Supprimé</a></i>
            </td>
            <td><img src="img/no.png"></td>
        </tr>
        <tr>
            <td>19</td>
            <td>19
            </td>
            <td>18
            </td>
            <td><i>Tentacool et Tentacruel</i>
            </td>
            <td><i>メノクラゲドククラゲ</i>
            </td>
            <td>5 août 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>20</td>
            <td>20
            </td>
            <td>19
            </td>
            <td><i>Le fantôme de la jeune fille</i>
            </td>
            <td><i>ゆうれいポケモンとなつまつり</i>
            </td>
            <td>12 août 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>21</td>
            <td>21
            </td>
            <td>20
            </td>
            <td><i>Un Pokémon amoureux</i>
            </td>
            <td><i>バイバイバタフリー</i>
            </td>
            <td>19 août 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>22</td>
            <td>22
            </td>
            <td>21
            </td>
            <td><i>Quand la télékinésie s'en mêle</i>
            </td>
            <td><i>ケーシィ！ちょうのうりょくたいけつ！</i>
            </td>
            <td>26 août 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>23</td>
            <td>23
            </td>
            <td>22
            </td>
            <td><i>La tour de la terreur</i>
            </td>
            <td><i>ポケモンタワーでゲットだぜ！</i>
            </td>
            <td>2 septembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>24</td>
            <td>24
            </td>
            <td>23
            </td>
            <td><i>La revanche</i>
            </td>
            <td><i>ゴーストVSエスパー！</i>
            </td>
            <td>9 septembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>25</td>
            <td>25
            </td>
            <td>24
            </td>
            <td><i>Une rencontre mouvementée</i>
            </td>
            <td><i>おこらないでねオコリザル！</i>
            </td>
            <td>16 septembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>26</td>
            <td>26
            </td>
            <td>25
            </td>
            <td><i>Un parfum de victoire</i>
            </td>
            <td><i>エリカとクサイハナ</i>
            </td>
            <td>23 septembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>27</td>
            <td>27
            </td>
            <td>26
            </td>
            <td><i>Sommeil sur la ville</i>
            </td>
            <td><i>スリーパーとポケモンがえり!?</i>
            </td>
            <td>30 septembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>28</td>
            <td>28
            </td>
            <td>27
            </td>
            <td><i>Les Pokémon changent de look&nbsp;!</i>
            </td>
            <td><i>ロコン！ブリーダーたいけつ！</i>
            </td>
            <td>7 octobre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>29</td>
            <td>29
            </td>
            <td>28
            </td>
            <td><i>Le Pokémon qui a du punch&nbsp;!</i>
            </td>
            <td><i>かくとうポケモン！だいバトル！</i>
            </td>
            <td>14 octobre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>30</td>
            <td>30
            </td>
            <td>29
            </td>
            <td><i>Coup de foudre magnétique</i>
            </td>
            <td><i>コイルはでんきネズミのユメをみるか!?</i>
            </td>
            <td>21 octobre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>31</td>
            <td>31
            </td>
            <td>30
            </td>
            <td><i>Barrage contre Pokémon</i>
            </td>
            <td><i>ディグダがいっぱい！</i>
            </td>
            <td>28 octobre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>32</td>
            <td>32
            </td>
            <td>31
            </td>
            <td><i>Le Ninja Pokémon</i>
            </td>
            <td><i>セキチクにんじゃたいけつ！</i>
            </td>
            <td>4 novembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>33</td>
            <td>33
            </td>
            <td>32
            </td>
            <td><i>Le Poké-marathon</i>
            </td>
            <td><i>ほのおのポケモンだいレース！</i>
            </td>
            <td>11 novembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>34</td>
            <td>34
            </td>
            <td>33
            </td>
            <td><i>L'enfant sauvage</i>
            </td>
            <td><i>ガルーラのこもりうた</i>
            </td>
            <td>18 novembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>35</td>
            <td>35
            </td>
            <td>-
            </td>
            <td><i>La légende de Minidraco</i>
            </td>
            <td><i>ミニリュウのでんせつ</i>
            </td>
            <td>25 novembre 1997
            </td>
            <td><i><a>Supprimé</a></i>
            </td>
            <td><img src="img/no.png"></td>
        </tr>
        <tr>
            <td>36</td>
            <td>36
            </td>
            <td>34
            </td>
            <td><i>La bande des bicyclettes</i>
            </td>
            <td><i>あらしのサイクリングロード</i>
            </td>
            <td>2 décembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>37</td>
            <td>37
            </td>
            <td>35
            </td>
            <td><i>Le manoir mystérieux</i>
            </td>
            <td><i>メタモンとものまねむすめ</i>
            </td>
            <td>9 décembre 1997
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>38</td>
            <td>38
            </td>
            <td>-
            </td>
            <td><i>Le Soldat virtuel Porygon</i>
            </td>
            <td><i>でんのうせんしポリゴン</i>
            </td>
            <td>16 décembre 1997
            </td>
            <td><i><a>Supprimé</a></i>
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>39</td>
            <td>39
            </td>
            <td>36
            </td>
            <td><i>Au revoir, Pikachu</i>
            </td>
            <td><i>ピカチュウのもり</i>
            </td>
            <td>16 avril 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>40</td>
            <td>40
            </td>
            <td>37
            </td>
            <td><i>La montagne de l'Évolution</i>
            </td>
            <td><i>イーブイ４きょうだい</i>
            </td>
            <td>16 avril 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>41</td>
            <td>41
            </td>
            <td>38
            </td>
            <td><i>Sommeil sans faim</i>
            </td>
            <td><i>おきろ！カビゴン！</i>
            </td>
            <td>23 avril 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>42</td>
            <td>42
            </td>
            <td>39
            </td>
            <td><i>Sombreville</i>
            </td>
            <td><i>たいけつ！ポケモンジム！</i>
            </td>
            <td>30 avril 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>43</td>
            <td>43
            </td>
            <td>40
            </td>
            <td><i>Un Pokémon tout n'œuf</i>
            </td>
            <td><i>ナッシーぐんだんだいこうしん！</i>
            </td>
            <td>7 mai 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>44</td>
            <td>44
            </td>
            <td>41
            </td>
            <td><i>La potion miracle</i>
            </td>
            <td><i>パラスとパラセクト！</i>
            </td>
            <td>14 mai 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>45</td>
            <td>45
            </td>
            <td>42
            </td>
            <td><i>Une jolie berceuse</i>
            </td>
            <td><i>うたって！プリン！</i>
            </td>
            <td>21 mai 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>46</td>
            <td>46
            </td>
            <td>43
            </td>
            <td><i>L'attaque du Pokémon préhistorique</i>
            </td>
            <td><i>ふっかつ!? かせきポケモン！</i>
            </td>
            <td>28 mai 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>47</td>
            <td>47
            </td>
            <td>44
            </td>
            <td><i>Urgence à l'hôpital</i>
            </td>
            <td><i>ラッキーのカルテ</i>
            </td>
            <td>4 juin 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>48</td>
            <td>48
            </td>
            <td>45
            </td>
            <td><i>Un sacré mariage</i>
            </td>
            <td><i>ガーディとコジロウ</i>
            </td>
            <td>11 juin 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>49</td>
            <td>49
            </td>
            <td>46
            </td>
            <td><i>Recette aux poireaux</i>
            </td>
            <td><i>カモネギのカモ</i>
            </td>
            <td>18 juin 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>50</td>
            <td>50
            </td>
            <td>47
            </td>
            <td><i>Œuf surprise</i>
            </td>
            <td><i>トゲピーはだれのもの!?</i>
            </td>
            <td>25 juin 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>51</td>
            <td>51
            </td>
            <td>48
            </td>
            <td><i>Le jardin mystérieux</i>
            </td>
            <td><i>フシギダネのふしぎのはなぞの</i>
            </td>
            <td>2 juillet 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>52</td>
            <td>52
            </td>
            <td>49
            </td>
            <td><i>L'unité d'élite K 9</i>
            </td>
            <td><i>けいさつけんガーディ</i>
            </td>
            <td>16 juillet 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>53</td>
            <td>53
            </td>
            <td>50
            </td>
            <td><i>Le chasseur d'image</i>
            </td>
            <td><i>シャッターチャンスはピカチュウ</i>
            </td>
            <td>23 juillet 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>54</td>
            <td>54
            </td>
            <td>51
            </td>
            <td><i>Ultime épreuve</i>
            </td>
            <td><i>ポケモンけんていしけん&nbsp;!?</i>
            </td>
            <td>30 juillet 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>55</td>
            <td>55
            </td>
            <td>52
            </td>
            <td><i>Le secret du centre d'élevage</i>
            </td>
            <td><i>そだてやのひみつ！</i>
            </td>
            <td>6 août 1998
            </td>
            <td>1999
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>56</td>
            <td>56
            </td>
            <td>53
            </td>
            <td><i>La guerre des princesses</i>
            </td>
            <td><i>げきとう！ポケモンひなまつり</i>
            </td>
            <td rowspan="2">9 juillet 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>57</td>
            <td>57
            </td>
            <td>54
            </td>
            <td><i>Un héros au poil</i>
            </td>
            <td><i>こどものひだよ！ぜんいんしゅうごう！</i>
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>58</td>
            <td>58
            </td>
            <td>55
            </td>
            <td><i>Le champion des devinettes</i>
            </td>
            <td><i>もえろ！グレンジム！</i>
            </td>
            <td>13 août 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>59</td>
            <td>59
            </td>
            <td>56
            </td>
            <td><i>Panique volcanique</i>
            </td>
            <td><i>けっせん！グレンジム！</i>
            </td>
            <td>20 août 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>60</td>
            <td>60
            </td>
            <td>57
            </td>
            <td><i>L'île des Pokémon Tortues</i>
            </td>
            <td><i>カメックスのしま</i>
            </td>
            <td>27 août 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>61</td>
            <td>61
            </td>
            <td>58
            </td>
            <td><i>La sirène magique</i>
            </td>
            <td><i>ハナダジム！すいちゅうのたたかい！</i>
            </td>
            <td>3 septembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>62</td>
            <td>62
            </td>
            <td>59
            </td>
            <td><i>Les envahisseurs</i>
            </td>
            <td><i>ピッピVSプリン</i>
            </td>
            <td>10 septembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>63</td>
            <td>63
            </td>
            <td>60
            </td>
            <td><i>L'arène Team Rocket</i>
            </td>
            <td><i>トキワジム！さいごのバッジ！</i>
            </td>
            <td>17 septembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>64</td>
            <td>64
            </td>
            <td>61
            </td>
            <td><i>Quel cirque&nbsp;!</i>
            </td>
            <td><i>ポケモンサーカスのバリヤード</i>
            </td>
            <td>24 septembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>65</td>
            <td>65
            </td>
            <td>62
            </td>
            <td><i>Des joujoux par milliers</i>
            </td>
            <td><i>ルージュラのクリスマス</i>
            </td>
            <td rowspan="2">5 octobre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>66</td>
            <td>66
            </td>
            <td>63
            </td>
            <td><i>Tempête de neige</i>
            </td>
            <td><i>イワークでビバーク</i>
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>67</td>
            <td>67
            </td>
            <td>64
            </td>
            <td><i>Règlement de compte à Poké Corrall</i>
            </td>
            <td><i>ライバルたいけつ！オーキドけんきゅうじょ</i>
            </td>
            <td>8 octobre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>68</td>
            <td>68
            </td>
            <td>65
            </td>
            <td><i>Le mystère de l'évolution</i>
            </td>
            <td><i>ヤドンがヤドランになるとき</i>
            </td>
            <td>15 octobre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>69</td>
            <td>69
            </td>
            <td>66
            </td>
            <td><i>Le Pi-Kahuna</i>
            </td>
            <td><i>なみのりピカチュウのでんせつ</i>
            </td>
            <td>22 octobre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr style="background: lightseagreen;">
            <td colspan="3" rowspan="2">1er film
            </td>
            <td><i>Pokémon&nbsp;: Le film</i> (<i>Mewtwo contre Mew</i>)
            </td>
            <td><i>劇場版ポケットモンスター ミュウツーの逆襲</i>
            </td>
            <td>18 juillet 1998 <small>(cinéma)</small><br>23 juin 2000 <small>(DVD)</small>
            </td>
            <td>5 avril 2000 <small>(cinéma)</small><br>14 novembre 2000 <small>(DVD)</small>
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr style="background: lightseagreen;">
            <td colspan="4">Ce film se déroule durant la saison 1 du dessin animé. Les légendaires qui y
                apparaissent sont Mew et Mewtwo. Même si l'on retrouve des scènes de la saison telles que le
                combat de Régis contre Giovanni (épisode <i>L'arène Team Rocket</i>) ou le moment où Mewtwo
                s'échappe de la base de la Team Rocket, la chronologie de ce film reste inconnue. Ainsi, il
                s'étend d'après l'épisode 64 à avant épisode 73.
            </td>
            <td></td>
        </tr>
        <tr>
            <td>70</td>
            <td>70
            </td>
            <td>67
            </td>
            <td><i>Talents cachés</i>
            </td>
            <td><i>しょくぶつえんのクサイハナ</i>
            </td>
            <td>29 octobre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>71</td>
            <td>71
            </td>
            <td>68
            </td>
            <td><i>Lumière&nbsp;! Moteur&nbsp;! Action&nbsp;!</i>
            </td>
            <td><i>ポケモン・ザ・ムービー！</i>
            </td>
            <td>5 novembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>72</td>
            <td>72
            </td>
            <td>69
            </td>
            <td><i>Hollywood, me voilà&nbsp;!</i>
            </td>
            <td><i>ニャースのあいうえお</i>
            </td>
            <td>12 novembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>73</td>
            <td>73
            </td>
            <td>70
            </td>
            <td><i>Le secret</i>
            </td>
            <td><i>してんのう・シバ・とうじょう！</i>
            </td>
            <td>19 novembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>74</td>
            <td>74
            </td>
            <td>71
            </td>
            <td><i>Le mystère enfoui de Pokémonpolis</i>
            </td>
            <td><i>げきとつ！ちょうこだいポケモン</i>
            </td>
            <td>26 novembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>75</td>
            <td>75
            </td>
            <td>72
            </td>
            <td><i>Tombés sur un os&nbsp;!</i>
            </td>
            <td><i>ガラガラのホネこんぼう</i>
            </td>
            <td>3 décembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>76</td>
            <td>76
            </td>
            <td>73
            </td>
            <td><i>La Team Rocket met le feu</i>
            </td>
            <td><i>ファイヤー！ポケモンリーグかいかいしき！</i>
            </td>
            <td>10 décembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>77</td>
            <td>77
            </td>
            <td>74
            </td>
            <td><i>Ligue Pokémon Premier tour</i>
            </td>
            <td><i>ポケモンリーグかいまく！みずのフィールド</i>
            </td>
            <td>17 décembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>78</td>
            <td>78
            </td>
            <td>75
            </td>
            <td><i>Le feu et la glace</i>
            </td>
            <td><i>こおりのフィールド！ほのおのたたかい！</i>
            </td>
            <td>24 décembre 1998
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td colspan="3">Spécial
            </td>
            <td><i>Les Pokémon à la veille de Nouvel An&nbsp;!</i>
            </td>
            <td><i>おおみそうかだよ！　ポケットモンスターアンコール</i>
            </td>
            <td rowspan="2"><abbr class="abbr" title="Premier">1er</abbr> janvier 1999
            </td>
            <td><i><a>Supprimé</a></i>
            </td>
            <td><img src="img/no.png"></td>
        </tr>
        <tr>
            <td>79</td>
            <td>79
            </td>
            <td>76
            </td>
            <td><i>Quatrième tour décisif</i>
            </td>
            <td><i>くさのフィールド！いがいなきょうてき！</i>
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>80</td>
            <td>80
            </td>
            <td>77
            </td>
            <td><i>Un nouvel ami</i>
            </td>
            <td><i>ライバルとうじょう!</i>
            </td>
            <td>7 janvier 1999
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>81</td>
            <td>81
            </td>
            <td>78
            </td>
            <td><i>Amis ou ennemis&nbsp;?</i>
            </td>
            <td><i>セキエイスタジアム！VSヒロシ！</i>
            </td>
            <td>14 janvier 1999
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>82</td>
            <td>82
            </td>
            <td>79
            </td>
            <td><i>Amis malgré tout</i>
            </td>
            <td><i>ポケモンリーグ！さいごのたたかい！</i>
            </td>
            <td>21 janvier 1999
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        <tr>
            <td>83</td>
            <td>83
            </td>
            <td>80
            </td>
            <td><i>Alerte au Bourg Palette</i>
            </td>
            <td><i>マサラタウン！あらたなるたびだち</i>
            </td>
            <td>28 janvier 1999
            </td>
            <td>2000
            </td>
            <td><img src="img/ok.png"></td>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="eps">
        <tr>
            <td>Résultats</td>
            <td>81/83 épisodes</td>
            <td>1/1 film</td>
            <td>1/1 TV Special</td>
            <td>98%</td>
        </tr>
    </table>
    <section class="légende">
        <p style="color: white;">Légende :</p>
        <section class="balls"><img class="ball" src="img/ok.png">
            <p style="color: white; font-size: 15px;">Épisode obtenu et vérifié</p>
        </section>
        <section class="balls"><img class="ball" src="img/eca.png">
            <p style="color: white; font-size: 15px;">Épisode obtenu non vérifié</p>
        </section>
        <section class="balls"><img class="ball" src="img/no.png">
            <p style="color: white; font-size: 15px;">Épisode non obtenu</p>
        </section>
    </section>
</section>-->
<script src="app.js"></script>