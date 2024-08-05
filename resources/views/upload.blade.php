<div>
   
    <h1>Upload Image</h1>

    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button>Upload</button>
    </form>
</div>
<style>
    input[type="file"] {
        margin-bottom: 10px;
    }

    button {
        margin-top: 10px;
    }

    img {
        max-width: 100%;
    }

    div {
        text-align: center;
    }

    h1 {
        margin-bottom: 20px;
    }

    form {
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }
    

    img {
        max-width: 500px;
        max-height: 500px;
    }
    /* Dark mode styles */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #333;
            color: #fff;
        }
    

    @media (max-width: 768px) {
        img {
            max-width: 100%;
            max-height: auto;
        }
    }

</style>