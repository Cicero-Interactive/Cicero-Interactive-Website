---
layout:		wrapper
---
<div class="post">
	<div class="post__inner">
		<article>
			{% if page.img %}
				<img class="post-img" src="{{ site.baseurl_root }}/assets/img/news/{{ page.img }}"></img>
			{% endif %}
			<div class="post-info">
				<h1>{{ page.title }}</h1>
				<h6>
					By: {{ page.author }}
					<span class="post-info__date">
						{{ page.date | date: "%B %d, %Y" }}
					</span>
				</h6>
			</div>
			{{ content }}
		</article>

		<div class="recent-posts">
			Recent posts:
			<div class="news news--post">
				{% for post in site.posts limit:3 %}
				<a href="{{ site.baseurl | append: post.url }}">
					<div>
						<div><div style="background-image: url('{{ site.baseurl_root }}/assets/img/news/{{ post.img }}')"></div></div>
						<div>
							<div>{{ post.title }}</div>
							<!-- <div>{{ post.excerpt }}</div> -->
							<div>{{ post.date | date: "%B %d, %Y" }}</div>
						</div>
					</div>
				</a>
				{% endfor %}
			</div>
		</div>
	</div>
</div>