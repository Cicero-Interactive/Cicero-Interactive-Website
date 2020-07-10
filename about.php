---
layout: wrapper
title: about.title
nav_absolute: true
---

<div class="section section--top-image">
	<div>
		<div style="background-image: url('{{ site.baseurl_root }}/assets/img/about.png')"></div>
		<div style="background-image: url('{{ site.baseurl_root }}/assets/img/about.png')"></div>
		<!-- <div><div style="max-width: 1060px; margin: auto">{% t about.title %}</div></div> -->
	</div>
</div>
<div class="section section--about">
	<div class="section__inner">
		<div style="max-width: 1100px; margin: auto">
			<div class="row">
				<div class="cell" style="padding: 0px 5% 0px 5%">
					<h1>{% t about.general_information.title %}</h1>
					<div>
						{% t about.general_information.content %}
					</div>
				</div>
			</div>
			<div class="row" style="height: 50px"></div>
			<div class="row">
				<div class="cell" style="padding: 0px 5% 0px 5%">
					<h1>{% t about.members.title %}</h1>

					<div class="members members--main">
						{% for member in site.data.members.main %}
							<div class="member-card">
								<div class="member-card__image-container">
									<img class="member-card__image-container__image"
										{% if member.img %}
											src="{{ site.baseurl_root }}/assets/img/members/{{ member.img }}"
										{% else %}
											src="{{ site.baseurl_root }}/assets/img/members/default_white.png"
										{% endif %}
										{% unless member.contacts %}
											style="filter: none !important;"
										{% endunless %}
									>
									{% if member.contacts %}
										<div class="member-card__image-container__contacts">
											<div class="member-card__image-container__contacts__title">Contacts:</div>
											{% for contact in member.contacts %}
												<span class="member-card__image-container__contacts__contact">
													<a href="{{ contact.link }}">
														<img src="{{ site.baseurl_root }}/assets/img/ico{{ contact.method | capitalize }}.png" title="{{ contact.method | capitalize }}">
													</a>
												</span>
											{% endfor %}
										</div>
									{% endif %}
								</div>
								<div class="member-card__name">
									{{ member.name }}
								</div>
								<div class="member-card__roles">
									{% for role in site.translations[site.lang]["about"]["members"]["main"][member.short]["roles"] %}
										{{ role }}{% if forloop.last == false %},{% endif %}
									{% endfor %}
								</div>
								{% if site.translations[site.lang]["about"]["members"]["main"][member.short]["description"] %}
									<div class="member-card__description">
										<div class="member-card__description__collapse-button" onclick="toggleCollapsible(this)" data-content-collapsed="▽ {% t about.members.show_more %}" data-content-expanded="△ {% t about.members.show_less %}">
											▽ {% t about.members.show_more %}
										</div>
										<div class="member-card__description__content">
											<p>{{ site.translations[site.lang]["about"]["members"]["main"][member.short]["description"] }}</p>
										</div>
									</div>
								{% endif %}
							</div>
						{% endfor %}
					</div>

					<div class="members members--supporters">
						{% for member in site.data.members.supporters %}
							<div class="member-card">
								<div class="member-card__image-container">
									<img class="member-card__image-container__image"
										{% if member.img %}
											src="{{ site.baseurl_root }}/assets/img/members/{{ member.img }}"
										{% else %}
											src="{{ site.baseurl_root }}/assets/img/members/default_white.png"
										{% endif %}
										{% unless member.contacts %}
											style="filter: none !important;"
										{% endunless %}
									>
									{% if member.contacts %}
										<div class="member-card__image-container__contacts">
											<div class="member-card__image-container__contacts__title">Contacts:</div>
											{% for contact in member.contacts %}
												<span class="member-card__image-container__contacts__contact">
													<a href="{{ contact.link }}">
														<img src="{{ site.baseurl_root }}/assets/img/ico{{ contact.method | capitalize }}.png" title="{{ contact.method | capitalize }}">
													</a>
												</span>
											{% endfor %}
										</div>
									{% endif %}
								</div>
								<div class="member-card__name">
									{{ member.name }}
								</div>
								<div class="member-card__roles">
									{% for role in site.translations[site.lang]["about"]["members"]["supporters"][member.short]["roles"] %}
										{{ role }}{% if forloop.last == false %},{% endif %}
									{% endfor %}
								</div>
								<div class="member-card__description">
									{% if site.translations[site.lang]["about"]["members"]["supporters"][member.short]["description"] %}
										<div class="member-card__description">
											<div class="member-card__description__collapse-button" onclick="toggleCollapsible(this)" data-content-collapsed="▽ {% t about.members.show_more %}" data-content-expanded="△ {% t about.members.show_less %}">
												▽ {% t about.members.show_more %}
											</div>
											<div class="member-card__description__content">
												<p>{{ site.translations[site.lang]["about"]["members"]["supporters"][member.short]["description"] }}</p>
											</div>
										</div>
									{% endif %}
								</div>
							</div>
						{% endfor %}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>