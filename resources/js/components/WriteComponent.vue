<template>
    <div class="content">
        <!-- What would you like to write about today? -->
        <h1>{{ msg }}</h1>

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
    </div>
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
#write {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}
</style>
