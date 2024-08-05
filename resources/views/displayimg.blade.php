<div>
    <h1>List of all images</h1>
    <ul id="imageList">
        @foreach($image as $image)
            <img src="{{ url('storage/'. $image->path) }}" alt="{{ $image->name }}" height="300px" width="300px">
        @endforeach
    </ul>
    <a href="/upload">Upload More image</a>
</div>
<style>
    img {
        border: 1px solid black;
    }
    #imageList {
        list-style-type: none;
        padding: 0;
    }
    #imageList img {
        max-width: 300px;
        max-height: 300px;
    }
    #imageList img:hover {
        transform: scale(1.1);
        transition: transform 0.3s;
        cursor: pointer;
    }
    h1 {
        text-align: center;
    }
    a{
        color: white;
    }
    
    /* Dark mode styles */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #333;
            color: #fff;
        }
        h1 {
            color: #fff;
        }
        img {
            border: 1px solid #fff;
        }
    }
 
</style>