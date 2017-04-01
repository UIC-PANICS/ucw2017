<?php
$dbhost='';
$dbuser='';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
    die("Counld not connect");
}
$getdata="SELECT * FROM timetable";
mysql_select_db('demonist');
$retval=mysql_query($getdata);
$info=array();
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    array_push($info,array($row["date"],$row["day"],$row["time"],$row["place"],$row["section"]));
}
function selectsections($sectionname,$infos){
    for($i=0;$i<count($infos);$i++){
        echo $infos[$i][4];
        if($infos[$i][4]==$sectionname){
            echo "<div class=\"timetable normalbg\">
            <h2>".$infos[$i][0]." <span>".$infos[$i][1]."</span></h2>
            <h1>".$infos[$i][3]."</h1>
            <p>".$infos[$i][2]."</p>
        </div>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>8th UIC Cyber Game Competition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta charset="utf-8">
    <meta name="theme-color" content="rgb(49,60,85)">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/unslider.min.js"></script>
    <script src="js/dynamic.js"></script>
    <script src="js/device.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script>

    </script>
</head>
<!--body start-->
<body>
<!--fixed element start-->
<!--lol part start-->
<!--lol contents-->
<div class="detailbox" id="lolcontent">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("lolcontent")'>
        <h2 class="phonetitle1">英雄联盟</h2>
    </div>
    <div class="introboxcontent">
        <h2>第八届 UICCG英雄联盟赛制</h2>
        <h3>参赛须知:</h3>
        1.	线上报名，进群报名：--五人组队。<br/>
        2.	参赛选手需要先参加小组赛，然后进去决赛。（小组赛采取BO3:三盘两胜制，决赛采取BO5:五盘三胜制）工作人员会把参赛队伍分成两个小组，然后开始抽签打第一轮比赛，赢得队伍进入第二轮，输的队伍参加复活赛（复活赛决出两只队伍进入第二轮），第二轮，两个队伍抽签打淘汰赛，赢的队伍进入第三轮，然后进行循环赛（不是积分赛，是两两队伍进行比赛，赛出小组第一第二名），决出小组赛的第一第二名。每天决出一个小组的第一第二名。隔周进行决赛，决赛决出冠亚季军。<br/>
        3.	晋级决赛后，请密切留意后续的比赛信息，建议和工作人员联系，了解清楚。<br/>
        4.	决赛采取第一小组的第一名与第二小组的第二名比赛，第一小组的第二名与第二小组的第一名比赛，赢得直接进入冠亚军争夺赛。输的进行季军争夺赛。<br/>
        5.	小组赛采取车轮战，具体的比赛日期，请密切留意比赛信息(大概在3月初或者3月中旬)<br/>

        <h3>参赛账号：</h3>
        因为要统一一个比赛区，防止不公平的现象出现，我们会向腾讯工作人员申请开通比赛服账号，比赛服账号的开通需要小组各个成员提供QQ账号。比赛服账号的点券以及金币额度有限，一旦用完后续无法再次充值，账号的点券及金币不会重置（也就意味着这个QQ号以后不论什么时候开通账号，账号里边都没有点券金币）。参赛的同学在购买必要的符文的同时，请理性消费必需品。

        <h3>比赛规则：</h3>5VS5 召唤师峡谷<br/>
        1、	参赛选手须提前到达现场参赛，迟到10分钟将视为弃权。<br/>
        2、	进入下一轮比赛但中途离开且未事先与工作人员说过的，会被视为弃权。<br/>
        3、	参赛选手须年满18周岁，并携带本人有效身份证参赛。<br/>
        4、	所有比赛均为5v5、房间模式、征召模式；<br/>
        5、	比赛原则上采用淘汰赛、三局两胜定胜负，各赛区根据参赛队伍数量以裁判现场安排为准；<br/>
        6、	比赛胜负由系统判定胜负为准；<br/>
        7、	由裁判组织双方队长猜拳一轮，胜方开设房间，并在房间左侧，败者在右侧；<br/>
        8、	抽签、开设建房、进入房间须有效率，裁判发起命令3分钟内未作为的队伍视为弃权；<br/>
        9、	比赛禁选开始至比赛结束全过程不得人为退出游戏，违者视为弃权；<br/>
        10、	队伍中只要有1名选手被视为弃权，则全队取消参赛资格；<br/>
        11、	比赛开始10分钟内若有选手掉线（非人为），且不能在5分钟内重连成功，比赛重新开始。重赛时双方必须选择和重赛前完全一样的阵容和召唤师技能；（选手一旦掉线，必须立刻呼叫裁判，在裁判的监督下进行重连，若选手掉线不联系裁判，则比赛照常进行）<br/>
        12、	比赛进行10分钟后，若有选手掉线（非人为），则在双方完成正在进行的战斗后，全部回城，直到掉线选手重新连接。重连期间双方可各派1-2名队员击杀正在攻击本方防御塔、水晶或基地的小兵，但不能离开本方防御塔攻击范围追杀小兵，不能进入野区、河道，不能埋伏、攻击对方英雄，违者视为弃权；（选手一旦掉线，必须立刻呼叫裁判，在裁判的组织下双方选手等待掉线选手重连，若选手掉线不联系裁判，则比赛照常进行）<br/>
        13、	如果掉线选手10分钟内无法重连成功，或者掉线造成了逆转性的局势变化，裁判可在整局比赛结束前根据情况决定是否重赛，选手须完全服从，重赛时双方必须选择和重赛前完全一样的阵容；比赛一旦结束，则以比赛结果为准，不得重赛；<br/>
        14、	比赛中不得使用任何第三方软件(聊天工具除外)，否则视为弃权；<br/>
        15、	比赛中不得利用任何BUG，不得使用有严重BUG的英雄，以现场裁判通知为准；<br/>
        16、	比赛中出现任何突发情况，须立即与裁判联系，裁判作出判罚，选手须完全服从；<br/>
        17、	本次赛事解释权归CST专业协会所有。<br/>
        比赛咨询：（每个组的队长最好都加进来）
    </div>
</div>
<!--lol time-->
<div class="detailbox" id="loltime">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("loltime")'>
        <h2 class="phonetitle1">英雄联盟时间表</h2>
    </div>
    <div class="introboxcontent">
        <?php
        selectsections("lol",$info);
        ?>
    </div>
</div>
<!--lol part end-->
<!--ow part start-->
<!--ow contents-->
<div class="detailbox" id="owcontent">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("owcontent")'>
        <h2 class="phonetitle1">守望先锋</h2>
    </div>
    <div class="introboxcontent">
        <h2>第八届 UICCG 守望先锋团队赛细则</h2>
        <ol>
            <li><b>1. 比赛地图：</b>游戏内所有地图</li>
            <li><b>2. 比赛规则及胜负判定：</b>所有比赛都将在竞技模式下进行，采取三局两胜制。率先赢得2张地图胜利的队伍即为胜出者，能够晋级下一场比赛。
                <br/>比赛第一张为随机地图，第二张地图开始败者选图，比赛地图不可重复出现。运载目标、占领目标点类型地图比赛两队将各成为一次进攻方与防守方，若某队两次均获得胜利则获得该局比赛胜利；若运载目标、占领要点类型地图两队各获得一次比赛胜利，则随机挑选一张占领目标点地图进行一小局争夺点战（只抢第一个点作为胜负标准），获胜者获得该局比赛胜利（此时不需两队都进行一次进攻一次防守）。
            </li>
            <li><b>3. 注意事项：</b>请各位选手按需自带设备进行比赛。如在网吧进行比赛，请参赛选手自行承担来往交通费及网费。</li>
            <li><b>4. 队伍组成及相关：</b>每支队伍由6名选手组成，整个比赛期间（报名后至所有比赛结束）不可变更选手及战网昵称；所有队伍报名时需要提供所有队员的联系方式。</li>
            <li><b>特殊情况处理：</b>
                <ul>
                    <li>掉线：比赛中若由于客观原因，造成的掉线卡机的情况，3分钟内发生掉线情况可申请重赛;超过3分钟发生掉线情况比赛继续，掉线的选手自行重连回游戏。重赛机制需要队伍申请执行，每支队伍只有1次掉线申请重赛的机会。</li>
                    <li>缺席：若参赛队伍在比赛开始后5分钟内队员没有到齐进行比赛，则该队判负。因为特殊原因不能参与当日比赛的，可与对手商议在比赛第一轮结束前自行比赛。</li>
                    <li>作弊：若参赛队伍有使用任何非官方插件等辅助程序的一经发现，取消比赛资格。</li>
                </ul>
                若出现掉线、卡机、卡顿等非人为情况出现请及时呼叫相关工作人员，由裁判决定是否重赛（原则上不给予重赛）。重赛规则详见第八届 UICCG 守望先锋团队赛重赛规则
            </li>
            <li><b>5. 严禁代打：</b>参赛选手请携带uic校园卡做身份证明，否则将不允许该选手参赛。</li>
            <li><b>6. 游戏BUG：</b>禁止使用当前版本下的游戏BUG，官方有权禁用引起BUG的英雄或地图。如参赛人员有利用游戏中BUG的行为，将判定该玩家所在队伍失去比赛资格。</li>
            <li><b>7. 比赛版本更替：</b>比赛将使用最新游戏版本。</li>
            <li><b>8. 参赛队伍管理：</b>所有参赛队伍成员将由组织者统一拉进一个比赛微信群作为消息通知的平台，请选手们在群内谨言慎行。若是有在群内发布含有恶意辱骂其他选手、虚假消息等等类似言论的选手出现，组织者有权取消其所在队伍的比赛资格，其对手直接晋级下一轮比赛。</li>
            <li><b>9. 重赛: </b>有关重赛的胜负判定及比赛方式，请看 <b>《第八届 UICCG 守望先锋团队赛重赛规则》</b></li>
        </ol>
    </div>
</div>
<!--ow time-->
<div class="detailbox" id="owtime">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("owtime")'>
        <h2 class="phonetitle1">守望先锋时间表</h2>
    </div>
    <div class="introboxcontent">
        <?php
        selectsections("ow",$info);
        ?>
    </div>
</div>
<!--ow part end-->
<!--king part start-->
<!--king time-->
<div class="detailbox" id="kingtime">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("kingtime")'>
        <h2 class="phonetitle1">王者荣耀时间表</h2>
    </div>
    <div class="introboxcontent">
        <?php
        selectsections("king",$info);
        ?>
        </div>
</div>
<!--king part end-->
<!--hearthstone part start-->
<!--hearthstone contents-->
<div class="detailbox" id="hearthcontent">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("hearthcontent")'>
        <h2 class="phonetitle1">炉石传说</h2>
    </div>
    <div class="introboxcontent">
        <h2>第八届 UICCG炉石传说赛制</h2>
        <h3>比赛规则</h3>
        <p>本次比赛采用征服赛制。参赛选手先准备四个不同职业的卡组，在对战之前让对手看自己的卡组并 且删除其中一个卡组，用剩下的三个卡组进行对战。胜者不可继续使用同一卡组，失败方可以继续 使用原来的卡组或使用其他卡组，当有一方三个卡组都获得至少一次胜利以后赢得本次比赛的胜 利。每次比赛完以后双方都要进行截图保存到电脑或移动设备上，从而保证比赛结果的有效性。</p>
        <h3>比赛流程</h3>
        <p>1. 在比赛两天前将自己的卡组截图上传到服务器上 <br/>2. 比赛当天首先根据抽签结果进行对战，如果参赛人数为奇数，则有一人可以直接进入下一轮， 若下一轮仍为奇数，则上一轮直接进入下一轮的选手必须参赛，再从上一轮胜者中抽一人直接 进入下一轮
            <br/>3. 第一个比赛日决出四强，第二个比赛日半决赛和决赛选手必须有五个卡组，比赛前让对手绊掉 一个卡组然后进行对战，其他规则和淘汰赛一样，先赢得四场的选手胜利</p>
        <h3>设备</h3>
        <p>自带电脑，iPad或手机。</p>
    </div>
</div>
<!--hearthstone time-->
<div class="detailbox" id="hearthtime">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("hearthtime")'>
        <h2 class="phonetitle1">炉石传说时间表</h2>
    </div>
    <div class="introboxcontent">
        <?php
        selectsections("hearthstone",$info);
        ?>
    </div>
</div>
<!--hearthstone part end-->
<!--clash royale part start-->
<!--clash royale contents-->
<div class="detailbox" id="crcontent">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("crcontent")'>
        <h2 class="phonetitle1">皇室战争</h2>
    </div>
    <div class="introboxcontent">
        <h2>第八届 UICCG皇室战争赛制</h2>
        <ul>
            <li><b>参赛人员： </b>所有UIC在读学生包括毕业学长学姐均可以报名，要求现场参赛。</li>
            <li><b>赛制</b></li>
            <li>所有参赛人员在同一部落中，比赛以友谊赛的形式进行。比赛分为小组赛和淘汰赛。</li>
            <li>小组赛。所有参赛人员平均分成若干组。组内所有人以友谊赛方式进行对战，同时积分，与组内其他人各1次对战。赢得一场比赛获得3分，平局双方各1分，输则没有分。当比赛完时，各小组前X名进淘汰赛（根据报名人数），淘汰赛人数为8/16（根据比赛人数）</li>
            <li>淘汰赛。进入淘汰赛的参赛选手根据小组排名决定对手（如第一名与另一组最后一名），以三局两胜制决定晋级。确定对手后双方进行ban卡选择，各选择1张卡（选好后告诉裁判后公布），若选择相同则只有一张ban卡，即双方都不能在该局比赛中使用该卡（若使用则本局比赛判负同时警告一次，同时使用ban卡则跳过本局比赛双方同时警告，警告达到两次取消比赛资格。）每局比赛后双方可以任意调整卡组（ban卡除外）并继续下一局对战。晋级后抽签决定下一轮的对手，并重新进行ban卡环节（同上），同样三局两胜制。同样抽签决定对手，以此类推，直到决出冠亚季军。</li>
        </ul>
    </div>
</div>
<!--clash royale time-->
<div class="detailbox" id="crtime">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("crtime")'>
        <h2 class="phonetitle1">皇室战争时间表</h2>
    </div>
    <div class="introboxcontent">
        <?php
        selectsections("cr",$info);
        ?>
    </div>
</div>
<!--clash royale part end-->
<!--dizhu part start-->
<!--dizhu time-->
<div class="detailbox" id="dizhutime">
    <div class="phoneheader">
        <img src="images/clear.png" class="imgstyle" alt="" onclick='hidedetailbox("dizhutime")'>
        <h2 class="phonetitle1">斗地主时间表</h2>
    </div>
    <div class="introboxcontent">
        <?php
        selectsections("dizhu",$info);
        ?>
    </div>
</div>
<!--dizhu part end-->
<!--fixed container end-->
<!--PC fixed element start-->
<div class="header">
    <a href="http://uiccst.com"><div id="headerleft">
            <img src="images/new_logo.png" height="60%" style="margin-top: 10px">
        </div></a>
    <div id="headerright">
        <ul>
            <li><a href="http://uiccst.com/form">Register Now</a></li>
        </ul>
    </div>
</div>


<div id="bar2">
    <table cellspacing="0">
        <tr style="height: 50px">
            <th><button class="buttonstyle"  onclick="$.scrollTo('#blank',1000)">主页</button></th>
            <th><button class="buttonstyle"  onclick="$.scrollTo('#introduction',1000)">赛制介绍与比赛日程</button></th>

        </tr>
    </table>

</div>

<!--PC fixed element end-->
<!--Mobile fixed element start-->
<div id="phoneheader">
    <img src="images/menu.png" height="100%" onclick="phonebar()">
    <h3 id="phonetitle">8th Cyber Game Competition</h3>
</div>
<div id="phonebarbackground" onclick="hidephonebar()">
</div>
<div id="pcbackground">
</div>
<div id="phonebar">
    <table cellpadding="18px">
        <tr><th><b>Menu</b></th></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#blank',1000)"><b>主页</b></td></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#introduction',1000)"><b>英雄联盟</b></td></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#ow',1000)"><b>守望先锋</b></td></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#king',1000)"><b>王者荣耀</b></td></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#cr',1000)"><b>皇室战争</b></td></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#hearth',1000)"><b>炉石传说</b></td></tr>
        <tr><td onclick="hidephonebar();$.scrollTo('#dizhu',1000)"><b>欢乐斗地主</b></td></tr>
        <tr><th id="phonebarth"><a href="https://form.uiccst.com"><b>Register Now</b></a></th></tr>

    </table>
</div>

<!--Mobile fixed element end-->
<!--fixed element end-->
<!--blank part-->
<div id="blank">
</div>
<!--main content begin-->
<div class="banner" id="b04">
    <ul>
        <li><img src="https://ols1alctg.qnssl.com/17-2-23/43336671-file_1487811769529_79cb.jpg" alt="" width="100%" height="auto" ></li>
        <li><img src="https://ols1alctg.qnssl.com/17-2-23/87226452-file_1487811769665_799b.jpg" alt="" width="100%" height="auto" ></li>
        <li><img src="https://ols1alctg.qnssl.com/17-2-23/80868023-file_1487811769243_b4bf.jpg" alt="" width="100%" height="auto" ></li>
        <li><img src="https://ols1alctg.qnssl.com/17-2-23/8142067-file_1487811769366_ab58.jpg" alt="" width="100%" height="auto" ></li>
        <li><img src="https://ols1alctg.qnssl.com/17-2-23/1803809-file_1487811768949_c074.png" alt="" width="100%" height="auto" ></li>
        <li><img src="https://ols1alctg.qnssl.com/17-2-23/24230485-file_1487811769128_a905.jpg" alt="" width="100%" height="auto" ></li>
    </ul>
    <a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="images/arrowl.png" alt="prev" width="20" height="35"></a>
    <a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="images/arrowr.png" alt="next" width="20" height="37"></a>
</div>

<!--add things from here-->
<div class="maingame clearfix" id="introduction">
    <!--lol intro-->
    <div class="gamecontainer  flowleft">
        <div class="introbox shadow"  id="lolintro" onclick='showdetailbox("lolcontent")'>
            <img src="https://ols1alctg.qnssl.com/17-2-23/43336671-file_1487811769529_79cb.jpg" width="100%" alt="">
            <h2>英雄联盟</h2>
            <p class="left">《英雄联盟》(简称LOL)是由美国拳头游戏(Riot Games)开发、中国大陆地区腾讯游戏代理运营的英雄对战MOBA竞技网游。游戏里拥有数百个个性英雄，并拥有排位系统、天赋系统、符文系统等特色养成系统。《英雄联盟》还致力于推动全球电子竞技的发展，除了联动各赛区发展职业联赛、打造电竞体系之外，每年还会举办“季中冠军赛”“全球总决赛”“All Star全明星赛”三大世界级赛事，获得了亿万玩家的喜爱。</p>
            <p class="spanleft"><b>查看赛制</b></p>
        </div>
        <button class="mainbutton1 bluebutton" id="ow" onclick="showdetailbox('loltime')">
            查看比赛时间和地点
        </button>
    </div>
    <!--ow intro-->
    <div class="gamecontainer  flowright">
        <div class="introbox shadow"  id="owintro" onclick='showdetailbox("owcontent")'>
            <img src="https://ols1alctg.qnssl.com/17-2-23/87226452-file_1487811769665_799b.jpg" width="100%" alt="">
            <h2>守望先锋</h2>
            <p class="left">《守望先锋》是一款由暴雪娱乐开发并发行的多人第一人称射击游戏。<br>
                《守望先锋》把玩家分为两支队伍，每队6人。玩家可从几个预定英雄人物中选择，每个英雄有自己独特属性和技能；这些英雄分为四类：突击型、防御型、重装型和支援型。队员合力保护并捍卫地图上的控制点，或在有限时间内护送载具到达指定地点。玩家获得的诸如人物皮肤和胜利姿势等装扮不会影响游戏。</p>
            <p class="spanleft"><b>查看赛制</b></p>
        </div>
        <button class="mainbutton1 bluebutton" id="king" onclick="showdetailbox('owtime')">
            查看比赛时间和地点
        </button>
    </div>
</div>
<div class="maingame clearfix">
    <!--king intro-->
    <div class="gamecontainer flowleft">
        <div class="introbox shadow"  id="kingintro" onclick='window.location.href="documents/king.pdf"'>
            <img src="https://ols1alctg.qnssl.com/17-2-23/8142067-file_1487811769366_ab58.jpg" width="100%" alt="">
            <h2>王者荣耀</h2>
            <p class="left">《王者荣耀》是由腾讯游戏开发并运行的一款运营在Android、IOS平台上的MOBA类手游，于2015年11月26日在Android、IOS平台上正式公测，游戏前期使用名称有《英雄战迹》、《王者联盟》。
                <br>王者荣耀是类dota手游，游戏中的玩法以竞技对战为主，玩家之间进行1V1、3V3、5V5等多种方式的PVP对战，还可以参加游戏的冒险模式，进行PVE的闯关模式，在满足条件后可以参加游戏的年度排位赛等。</p>
            <p class="spanleft"><b>查看赛制</b></p>
        </div>
        <button class="mainbutton1 bluebutton" id="cr" onclick="showdetailbox('kingtime')">
            查看比赛时间和地点
        </button>
    </div>
    <!--clash royale intro-->
    <div class="gamecontainer flowright">
        <div class="introbox shadow"  id="crintro" onclick='showdetailbox("crcontent")'>
            <img src="https://ols1alctg.qnssl.com/17-2-23/1803809-file_1487811768949_c074.png" width="100%" alt="">
            <h2>皇室战争</h2>
            <p class="left">《部落冲突：皇室战争》（Clash Royale）是由芬兰游戏公司Supercell所推出的，以《部落冲突》的角色和世界观为原型，加入即时策略、MOBA以及卡牌等元素的手机游戏，于2016年1月4日在App Store发布。
                在游戏中，玩家需通过不断的开启宝箱来获取卡片的方式来增强自己的战斗力，进而与其他在线的玩家进行匹配战斗。随着奖杯提升，开启不同场地的竞技场。</p>
            <p class="spanleft"><b>查看赛制</b></p>
        </div>
        <button class="mainbutton1 bluebutton" id="hearth" onclick="showdetailbox('crtime')">
            查看比赛时间和地点
        </button>
    </div>
</div>
<div class="maingame clearfix">
    <!--hearthstone intro-->
    <div class="gamecontainer flowleft">
        <div class="introbox shadow"  id="hearthintro" onclick='showdetailbox("hearthcontent")'>
            <img src="https://ols1alctg.qnssl.com/17-2-23/80868023-file_1487811769243_b4bf.jpg" width="100%" alt="">
            <h2>炉石传说</h2>
            <p class="left">《炉石传说：魔兽英雄传》是暴雪娱乐开发的一款集换式卡牌游戏。
                《炉石传说：魔兽英雄传》是一款免费游戏，故事背景基于魔兽争霸系列的世界观，玩家可以另行购买卡牌包。</p>
            <p class="spanleft"><b>查看赛制</b></p>
        </div>
        <button class="mainbutton1 bluebutton" onclick="showdetailbox('hearthtime')">
            查看比赛时间和地点
        </button>
        <button class="mainbutton1 orangebutton" id="dizhu" onclick="openpage('hearthstone/index.html')">
            上传和查看炉石卡组
        </button>
    </div>
    <!--dizhu intro-->
    <div class="gamecontainer flowright">
        <div class="introbox shadow"  id="dizhuintro" onclick='window.location.href="documents/dizhu.pdf"'>
            <img src="https://ols1alctg.qnssl.com/17-2-23/24230485-file_1487811769128_a905.jpg" width="100%" alt="">
            <h2>斗地主</h2>
            <p class="left">斗地主是一种在中国流行的纸牌游戏。游戏由3个玩家进行，用一副54张牌（包括大小王），其中一方为地主，其余两家为另一方，双方对战，先出完牌的一方获胜。</p>
            <p class="spanleft"><b>查看赛制</b></p>
        </div>
        <button class="mainbutton1 bluebutton" onclick="showdetailbox('dizhutime')">
            查看比赛时间和地点
        </button>
    </div>
</div>
<!--main content end-->
<!--footer part-->
<div id="footer">
    ©2016-2017 UIC-PANICS \ All Rights Reserved.
</div>
</body>

<!--Js part-->
<script>
    $(document).ready(function(e) {
        var unslider04 = $('#b04').unslider({
                dots: true,
                fluid: true
            }),
            data04 = unslider04.data('unslider');

        $('.unslider-arrow04').click(function() {
            var fn = this.className.split(' ')[1];
            data04[fn]();
        });
    });


</script>
<script type="text/javascript">
    var wide=screen.width;
    if(isPC()==true || isiPad()==true || wide>=768){
        window.onscroll=function(){
            var scrolltop=$(document).scrollTop();
            var element=document.getElementById("bar2");
            if(scrolltop==0){
                element.style.top="100px";
                element.style.marginLeft="5%";
                element.style.width="90%";
            }
            else{
                element.style.top="0";
                element.style.marginLeft="0";
                element.style.width="100%";
            }
        }
    }
    window.onresize=function(){
        var wide=screen.width;
        if(isPC()==true || isiPad()==true || wide>=768){
            window.onscroll=function(){
                var scrolltop=$(document).scrollTop();
                var element=document.getElementById("bar2");
                if(scrolltop==0){
                    element.style.top="100px";
                    element.style.marginLeft="5%";
                    element.style.width="90%";
                }
                else{
                    element.style.top="0";
                    element.style.marginLeft="0";
                    element.style.width="100%";
                }
            }
        }
    }
</script>
</html>