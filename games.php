<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Games | Cicero Interactive</title>
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="icon" type="image/png" href="{{ site.baseurl_root }}/assets/img/favicon.ico">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	
	<body>
		<div class="table" style="width: 100%">
			<tr>
				<td height="540" colspan="3" valign="top">
					<br><br><br><br><br>
					<img src="{{ site.baseurl_root }}/assets/img/menu.png" usemap="#Map">
				</td>
			</tr>
			
	<!--French Invaders-->
	<tr id="FrenchInvaders">
		<td width="60%" valign="top">
			<img src="{{ site.baseurl_root }}/assets/img/hdlFI.png" height="100"><br><br>
			<iframe allowfullscreen="" height="320" frameborder="0" width="570" src="https://www.youtube.com/embed/9AACo-IGNsQ"></iframe>
			<br><br>
			<div align="center">			
				<a href="downloads.html#FrenchInvaders">
					<img src="{{ site.baseurl_root }}/assets/img/btnDownload.png"
					onmouseover="this.src='{{ site.baseurl_root }}/assets/img/btnDownloadHover.png'"
					onmouseout="this.src='{{ site.baseurl_root }}/assets/img/btnDownload.png'"
					onmousedown="this.src='{{ site.baseurl_root }}/assets/img/btnDownloadPress.png'"
					/>
				</a>
			</div>
		</td>
		<td align="left" width="37%">
			<div>
				<b>
					<p><strong>French Invaders</strong>
					is a 2D space game, in which the French are trying to destroy the Earth and the Romans' extraterrestrial stronghold, the Planetum Romanum.<br><br>
					You are <strong class="bold">Rupert</strong>, an extraordinary space pilot with many superpowers.
					You will be called to face the French, defend the Planetum Romanum and even safe humanity.<br>
					Fight and save your race from extinction!<br>
					French Invaders is a large universe, filled with unexplored areas, mysteries, opportunity and military actions.<br>
					Made with GameMaker Studio 2 and the help of many artists from <a href="https://www.opengameart.org" target="new">opengameart.org</a>.
					</p>
				</b>
			</div>
		<br>
		<div>
			<a href="{{ site.baseurl_root }}/assets/img/scrFI.png" target="new">
				<img src="{{ site.baseurl_root }}/assets/img/scrFI.png" width="100%" height="100%">
			</a>
		</div>
		</td>
		<td width="3%">
		</td>
	</tr>
	<tr>
		<td>
			<br><br><br><br><br><br><br><br><br><br>
		</td>
	</tr> 
	<!--Burner War-->
	<tr id="BurnerWar">
		<td width="60%" valign="top">
			<img src="{{ site.baseurl_root }}/assets/img/hdlBW.png" height="74"><br><br>
			<iframe allowfullscreen="" height="320" frameborder="0" width="570" src="https://www.youtube.com/embed/QT6ufav3fxo"></iframe>
			<br><br>
			<div align="center">			
				<a href="downloads.html#BurnerWar">
					<img src="{{ site.baseurl_root }}/assets/img/btnDownload.png" 
					onmouseover="this.src='{{ site.baseurl_root }}/assets/img/btnDownloadHover.png'"
					onmouseout="this.src='{{ site.baseurl_root }}/assets/img/btnDownload.png'"
					onmousedown="this.src='{{ site.baseurl_root }}/assets/img/btnDownloadPress.png'"
					/>
				</a>
			</div>
		</td>
		<td align="left" width="37%">
			<div>
				<b>
					<p><strong>Burner War</strong>
					was a just-for-fun-project and was only made to increase my programming skills.<br>
					This game is really basic, because I made it in sixth grade and only with VB.NET.
					It won't get updates or bugfixes anymore, it's just on my website for archiving reasons.<br>
					You are a soldier who has to fight enemies in 4 levels in order to reach the finish flag.<br><br>
					Made with Visual Basic (VB.NET)
					</p>
				</b>
			</div>
			<br>
			<div>
				<a href="{{ site.baseurl_root }}/assets/img/scrBW.png" target="new">
					<img src="{{ site.baseurl_root }}/assets/img/scrBW.png" width="100%" height="100%">
				</a>
			</div>  
		</td>
		<td width="3%">
		</td>
	</tr>
	<tr>
		<td>
			<br><br><br><br><br><br><br><br>
		</td>
	</tr> 
	
	<!--News-->
	<tr>
		<td class="news" colspan="2">
			<p align="left"><img src="{{ site.baseurl_root }}/assets/img/news.png" alt="NEWS"></p>
		</td>
	</tr>
	<tr>
		<td class="tr" colspan="3">	
			<script>$(function(){$("#NewsFile").load("news.html");});</script>
			<div id="NewsFile"></div>
			<div id="msgJS"><br><br><div class="alertRed">
				Please enable JavaScript to see this content!
			</div></div>
			<script>document.getElementById("msgJS").style.display = "none";</script>
		</td>
	</tr>
	<tr height="50">            
		<td colspan="3">
			<p style="color: #999; text-align: center"><strong>Copyright (c) 2015-2019 Cicero Interactive. All rights reserved.</strong></p>
		</td>
		<!--<td colspan="2">
			<br>
			<a href="https://www.facebook.com/starshiftvideogame?notif_t=page_fan"><img src="{{ site.baseurl_root }}/assets/img/fb_icon.png" alt="fb" height="38" width="150"></a><br>
			<a href="http://www.indiedb.com/games/star-shift"><img src="{{ site.baseurl_root }}/assets/img/iDB_icon.png" alt="yt" height="38" width="150"></a><br>
		</td>-->
	</tr>
</table>