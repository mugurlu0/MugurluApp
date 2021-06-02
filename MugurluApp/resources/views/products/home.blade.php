@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem rem iusto dolores, neque minus animi quibusdam omnis itaque sapiente, unde ratione voluptatum possimus asperiores consequatur odio? Qui corrupti fugiat quas!Beatae iure dolores, ex numquam id et adipisci sit harum rerum omnis animi porro sapiente voluptatibus voluptate odit doloribus at officiis necessitatibus illum nobis aliquid. Optio qui quam impedit reiciendis?

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, consequuntur harum? Optio nihil in mollitia, ratione quasi nemo quaerat praesentium deserunt corporis eaque distinctio, quisquam, provident maxime suscipit harum aut.
                Ducimus laborum ex omnis nesciunt fuga, minus quod dolor minima animi facilis molestias similique perferendis libero at velit! Minima error autem saepe pariatur quis commodi illo corporis eveniet labore? Atque!
                Nemo, ipsum. Necessitatibus atque explicabo, expedita facilis tempore libero eius quis laborum cum animi, soluta voluptate quisquam minima omnis vero minus sed exercitationem totam dolor ut dolore reprehenderit quam labore.
                Praesentium, aliquam distinctio dolore libero consectetur autem earum dicta tenetur corporis sapiente suscipit et recusandae totam dolorum perferendis molestias expedita dolorem, velit explicabo enim. Dignissimos saepe natus dolorum quis blanditiis.
                Dignissimos unde fugiat aperiam voluptas, totam sed illum molestiae maxime quae enim eum rerum expedita! Explicabo amet error vel est magni numquam eaque. Totam omnis eaque et id minima reiciendis?
                Harum maiores incidunt, atque, totam adipisci voluptatem amet, hic dolores recusandae blanditiis inventore distinctio veniam omnis. Voluptatum, eaque quidem nam repellat deleniti aliquam eveniet blanditiis, placeat ab enim inventore porro.
                Eius hic alias dignissimos odit quisquam omnis magni tempora officia? Itaque voluptatem, minus fugiat et blanditiis dolorum quaerat. Mollitia est quos impedit debitis enim dolorum, aliquid corrupti recusandae tempore eum.
                Aliquam culpa, necessitatibus sint obcaecati unde aut ipsa saepe est voluptatibus quae excepturi quis ab corporis magni amet delectus omnis deserunt a, non quam. A perferendis quod ea necessitatibus veniam.
                Earum blanditiis, nobis provident reprehenderit assumenda eos excepturi. Itaque, iusto ducimus! Eum voluptas mollitia et dolor id, sapiente velit pariatur modi dolorem facere veniam doloribus aspernatur similique vero assumenda explicabo!
                Molestiae modi sit, similique quod quos temporibus accusantium repudiandae in. Odio aspernatur harum temporibus ipsam est! At illum quo voluptatem unde facilis sit doloremque repellat deleniti. Dolorem laborum quasi vero?

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
