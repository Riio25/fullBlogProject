<template>
    <div id="nav">
        <a href="/" class="menu-options">Home</a>
        <a href="/login" class="menu-options">Login</a>
        <a href="/register" class="menu-options">Register</a>
    </div>

<!--    <router-view />-->
</template>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}

#nav {
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 10px;
    width: 100%;
}

#nav a {
    font-weight: bold;
    color: #2c3e50;
}

.menu-options {
    float: right;
    margin: 0 20px;
    text-decoration: none;
    padding: 10px;
}
a:hover {
    text-decoration: underline;
    background-color: lightgrey;
}
</style>
