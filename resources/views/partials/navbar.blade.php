<div class="items-center w-full border h-10 flex  justify-between px-5">
		<div class="flex items-center gap-5">
			<a class="{{ ($title === 'Home') ? 'underline' : '' }}" href="/">Home</a>
			<a class="{{ ($title === 'Blog') ? 'underline' : '' }}" href="/blog">Blog</a>
			<a class="{{ ($title === 'Portfolio') ? 'underline' : '' }}" href="/portfolio">Portfolio</a>
		</div>
			
			
			
			<div>{{ $title }}</div>
</div>