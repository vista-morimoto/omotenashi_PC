google.load("feeds", "1"); //APIを読み込みます

function initialize(){
	
	var feed = new google.feeds.Feed("http://www.jikei-hospitality.ac.jp/contents/blogs/feed"); //読み込むRSSフィードを設定します
	var noPhoto = ("<img src='http://www.jikei-hospitality.ac.jp/contents/wp-content/themes/blogjikei/no-img.png' />"); //画像がなかった場合に表示する画像を指定します
	
	feed.setNumEntries(3); //記事を読み込む件数を設定します
	feed.load(dispfeed);
	
	function dispfeed(result){

		if(!result.error){
			var container = document.getElementById("feed_blog"); //HTMLに書き出す対象のIDを指定します

			for (var i = 0; i < result.feed.entries.length; i++) {

				var entry = result.feed.entries[i];

				var entryDate = new Date(entry.publishedDate);
				var entryYear = entryDate.getYear();
				if (entryYear < 2000){
					entryYear += 1900;
				}
				var entryMonth = entryDate.getMonth() + 1;
				if (entryMonth < 10) {
					entryMonth = "0" + entryMonth;
				}
				var entryDay = entryDate.getDate();
				if (entryDay < 10) {
					entryDay = "0" + entryDay;
				}
				var date = entryYear +'年'+ entryMonth +'月'+ entryDay +'日';

				var entryImg = "";
				var imgCheck = entry.content.match(/(src="http:)[\S]+((\.jpg)|(\.JPG)|(\.jpeg)|(\.JPEG)|(\.png)|(\.PNG))/);
				if(imgCheck){
					entryImg += '<img ' + imgCheck[0] + '" >';
					} else {
						entryImg += noPhoto;
				}
				var titleSnippet = entry.title;    //記事タイトル取得
				if (titleSnippet.length > 12) {
				title = titleSnippet.substr(0, 12) + '…';
				}else{
				title = entry.title;
				}

				container.innerHTML += 
'<li><a href="' + entry.link + '"><dl class="blog-md"><dd class="blog-image">'+ entryImg +'</dd><dt class="title">'+title+'</dt><dd class="day">' + date + '</dd></dl></a></li>';
			}

			var linkBlank = container.getElementsByTagName('a'); 
		}
	}
}
google.setOnLoadCallback(initialize);
