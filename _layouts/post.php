---
layout:		wrapper
---

{{ content }}

{% for post in site.posts limit:3 %}
	<div class="post-link">
		<span>{{ post.title }}</span>
		<span>{{ post.description }}</span>
	</div>
{% endfor %}