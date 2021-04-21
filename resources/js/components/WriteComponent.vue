<template>
    <div class="content">
        <!-- What would you like to write about today? -->
        <h1>{{ msg }}</h1>
    </div>
    <form id="blog-post" action="post">
        <input type="text" name="title" placeholder="Blog Title" />
        <textarea
            name="content"
            id="blog-content"
            cols="25"
            rows="10"
            placeholder="Start Writing..."
        ></textarea>
        <button type="submit">Submit</button>
    </form>
</template>

<script>
export default {
    computed: {},
    data(){
        return {
            msg: "What would you like to write about??"
        }
    }
};
</script>

<style scoped>

</style>
