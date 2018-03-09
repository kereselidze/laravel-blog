<template>
	<div>
		fdsfsd fsdf sdf sdf sdf sd
	</div>
</template>

<script>
	export default {
		props: ["title", "author", "content"],
		
		data(){
			return {
				isLiked: this.liked,
				isLoggedIn: this.logged_in,
				count: parseInt(this.likes_count) || 0,
				endpoint: "/api/v1/" + this.item_type + "/" + this.item_id + "/likes",
				isLoading: false
			};
		},
		methods: {}
	}
</script>