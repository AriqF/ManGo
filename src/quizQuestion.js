//quiz array

//hiragana to romaji
const quiz = [
    {
        q:'くるま：＿＿＿＿	',
        options:['Kurama','Kuriha','Kuruma','Kuroma'],
        answer: 2
    },
    {
        q:'こんにちは：＿＿＿＿	',
        options:['Konnichiha','Konnichiwa','Konnisaha','Konnisawa'],
        answer: 0
    },
    {
        q:'とうきょ：＿＿＿＿	',
        options:['Tokyo','Toukyou','Toukyou','Toukyo'],
        answer: 3
    },
    {
        q:'えんぴつ：＿＿＿＿',
        options:['Enhitsu','Enpidzu','Enpitsu','Enbitsu'],
        answer: 2
    },
    {
        q:'いっぱい：＿＿＿＿	',
        options:['Ipai','Itsubai','Itsupai','Ippai'],
        answer: 3
    },
    {
        q:'とけい：＿＿＿＿＿　',
        options:['dokei','tokei','dokee','dokie'],
        answer: 1
    },
    {
        q:'えいが：＿＿＿＿＿',
        options:['eiga','eika','iega','ieka'],
        answer: 0
    },
    {
        q:'いったい：＿＿＿＿',
        options:['itsudai','itsutai','ittai','itsukai'],
        answer: 2
    },
    {
        q:'にゃんこ：＿＿＿＿',
        options:['niyanko','niyango','nyango','nyanko'],
        answer: 3
    },
    {
        q:'きょねん：＿＿＿＿ ',
        options:['kyonen','kiyonen','kyoren','kyouren'],
        answer: 0
    },
]
//hiragana sentence to romaji
const quiz2 = [
    {
        q:'おはようございます、おじいさん：________',
        options:['Ohayou gozaimasu, ojisan','Ohayou gosaimasu, ojiisan','Ohayou gozaimasu, ojiisan','Ohayou gosaimasu, ojisan'],
        answer: 2
    },
    {
        q:'もしもしだいじょうぶですか：＿＿＿＿＿',
        options:['Mosha mosha daijyobu desuka','Mosha mosha daijyobu desuka','Mosha mosha daijyobu desuka','Moshi moshi daijyobu desuka'],
        answer: 3
    },
    {
        q:'これはわたしのかばんです：＿＿＿＿＿',
        options:['Kone ha watashi no kaban desu','Kore ha watashi no kaban desu','Kone ha watashi no kaban desu','Kore wa watashi no kaban desu'],
        answer: 1
    },
    {
        q:'あなたのともだちのなまえはだれですか？：＿＿＿＿＿',
        options:['Anata no tomodachi no nahae ha dare desuka?','Anata no domodachi no nahae wa dare desuka?','Anata no tomodachi no namae wa dare desuka?','Anata no tomodachi no namae ha dare desuka?'],
        answer: 3
    },
    {
        q:'このみせはあちらです：＿＿＿＿',
        options:['Kono misa ha asara desu','Kono mise ha achira desu','Kono mise ha asara desu','Kono mise wa achira desu'],
        answer: 1
    },
]
//katakana to romaji
const quiz3 = [
    {
        q:'ギター：＿＿＿＿',
        options:['Kitā','Kita','Gita','Gitā'],
        answer: 3
    },
    {
        q:'コンビニ：＿＿＿＿',
        options:['Ronbini','Konpini','Konbini','Ronpini'],
        answer: 2
    },
    {
        q:'サラダ：＿＿＿＿',
        options:['Sarada','Salada','Sarata','Saragu'],
        answer: 0
    },
    {
        q:'アイスクリーム：＿＿＿＿',
        options:['Aisukurīma','Aisukurīmu','Aisutarīmu','Aisutarīma'],
        answer: 1
    },
    {
        q:'ハンバガ：＿＿＿＿',
        options:['Hanbaga','Hanpaga','Hanbaka','Banpaga'],
        answer: 0
    },
    {
        q:'スターバックス: ＿＿＿＿＿',
        options:['Sutābakkusu','Sutābatsukusu','Sudābakkusu','Sudābatsukusu'],
        answer: 0
    },
    {
        q:'フライドポテト：＿＿＿＿',
        options:['Furaidopoteto','Furaidobochito','Furaidopochito','Furaidoboteto'],
        answer: 0
    },
    {
        q:'ロヤルミルクチィー：＿＿＿＿＿',
        options:['Royarumirukutī','Koyarumirukutī','Royaremirukutī','Royaremirutatī'],
        answer: 0
    },
    {
        q:'エスカレーター：＿＿＿＿　',
        options:['Esukarētā','Isukarētā','Esukarēku','Isukarēku'],
        answer: 0
    },
    {
        q:'アルコール：＿＿＿＿',
        options:['Arukōru','Arekōru','Arerōru','Arukōre'],
        answer: 0
    },
]
//romaji to katakana
const quiz4 = [
    {
        q:'Furaipan:＿＿＿＿',
        options:['フライパン　','ラフイパン','フライバン','フライハン'],
        answer: 0
    },
    {
        q:'Makudonarudo: ＿＿＿＿',
        options:['マクドナルド　','ムクドナレド　','マタドナルド','マクトナレド'],
        answer: 0
    },
    {
        q:'Erika: ＿＿＿＿',
        options:['エリカ　','イリカ　','エリガ　','エルカ'],
        answer: 0
    },
    {
        q:'Ekkusubokkusu: ＿＿＿＿',
        options:['エックスボックス　','エツクスボックス','エックスポックス','エツクスポックス'],
        answer: 0
    },
    {
        q:'Kōtō: ＿＿＿＿',
        options:['コートー','ゴートー','ロートー','ロードー'],
        answer: 0
    },
    {
        q:'Shatsu: ＿＿＿＿',
        options:['シャツ　','ツヤシ','シャツウ','ツッヤシ'],
        answer: 0
    },
    {
        q:'Sētā:＿＿＿＿',
        options:['セーター　','サーター　','セークー　','サークー'],
        answer: 0
    },
    {
        q:'Kōhī: ______',
        options:['コーヒー','コーピー','ゴーヒー','コービー'],
        answer: 0
    },
    {
        q:'Kēki: _______',
        options:['ケーキ','クーキ　','ケーギ','クーギ'],
        answer: 0
    },
    {
        q:'Vancouver: _____',
        options:['バンクーバー','ファンクーファ','バンクバー','ファンクバー'],
        answer: 0
    },
]