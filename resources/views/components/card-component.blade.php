<style>
    img {
        
        width: 100%;
        height: auto;
        align-items: center;

    }
</style>
<div>
    <div class="py-12">
        <div class="container">
            <div class="card">
            <img class="card-img-top" src="{{asset($image)}}" alt="news pic" >
                <div class="card-body">
                    <h3 class="card-title">{{$title}}</h3>
                    <p class="card-text">{{$content}}</p>
                    <p class="card-text">{{$other_name}}</p>
                    <p class="card-text">{{$create_at}}</p>
                    
                    <a href="#" class="btn btn-primary">Like</a>
                </div>
            </div>
        </div>
    </div>
</div>
