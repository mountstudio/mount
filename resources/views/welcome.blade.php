@extends('layouts.app')

@section('content')


    @include('blocks.main')
    @include('blocks.about_us')
    @include('blocks.technology')
    @include('blocks.process')
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 p-0">--}}
{{--                <div class="content">--}}
{{--                    <canvas class="scene scene--full" id="scene"></canvas>--}}
{{--                    <div class="content__inner">--}}
{{--                        <h2 class="content__title">Quantum</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@push('scripts')

    <script type="x-shader/x-vertex" id="vertexshader">

			attribute float scale;

			void main() {

				vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );

				gl_PointSize = scale * ( 300.0 / - mvPosition.z );

				gl_Position = projectionMatrix * mvPosition;

			}

		</script>

    <script type="x-shader/x-fragment" id="fragmentshader">

			uniform vec3 color;

			void main() {

				if ( length( gl_PointCoord - vec2( 0.5, 0.5 ) ) > 0.475 ) discard;

				gl_FragColor = vec4( color, 1.0 );

			}

		</script>

    <script src="{{ asset('js/three.min.js') }}"></script>
    <script type="module">

        var SEPARATION = 150, AMOUNTX = 50, AMOUNTY = 50;

        var container;
        var camera, scene, renderer;

        var particles, count = 0;

        var mouseX = 0, mouseY = 0;

        var three_background = $('footer #three_background');
        var footer = $('footer');
        var windowHalfX = three_background.innerWidth() / 2;
        var windowHalfY = three_background.innerHeight() / 2;

        init();
        animate();

        function init() {

            camera = new THREE.PerspectiveCamera( 40, footer.innerWidth() / footer.innerHeight(), 2, 10000 );
            camera.position.z = 2000;
            camera.position.y = 450;
            camera.position.x = 100;

            scene = new THREE.Scene();

            //

            var numParticles = AMOUNTX * AMOUNTY;

            var positions = new Float32Array( numParticles * 3 );
            var scales = new Float32Array( numParticles * 3 );

            var i = 0, j = 0;

            for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

                for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

                    positions[ i ] = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 ); // x
                    positions[ i + 1 ] = 0; // y
                    positions[ i + 2 ] = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 ); // z

                    scales[ j ] = 1;

                    i += 3;
                    j ++;

                }

            }

            var geometry = new THREE.BufferGeometry();
            geometry.setAttribute( 'position', new THREE.BufferAttribute( positions, 3 ) );
            geometry.setAttribute( 'scale', new THREE.BufferAttribute( scales, 1 ) );

            var material = new THREE.ShaderMaterial( {

                uniforms: {
                    color: { value: new THREE.Color( 0xffffff ) },
                },
                vertexShader: document.getElementById( 'vertexshader' ).textContent,
                fragmentShader: document.getElementById( 'fragmentshader' ).textContent

            } );

            //

            particles = new THREE.Points( geometry, material );
            scene.add( particles );

            //
            console.log(footer.innerWidth());

            renderer = new THREE.WebGLRenderer( { antialias: true } );
            renderer.setPixelRatio( window.devicePixelRatio );
            renderer.setSize( footer.innerWidth(), footer.innerHeight() );
            three_background.append( renderer.domElement );

            // document.addEventListener( 'mousemove', onDocumentMouseMove, false );
            // document.addEventListener( 'touchstart', onDocumentTouchStart, false );
            // document.addEventListener( 'touchmove', onDocumentTouchMove, false );

            //
            var resizeTm;
            window.addEventListener( 'resize', onWindowResize, false);

        }

        function onWindowResize() {

            windowHalfX = footer.innerWidth() / 2;
            windowHalfY = footer.innerHeight() / 2;

            camera.aspect = footer.innerWidth() / footer.innerHeight();
            camera.updateProjectionMatrix();

            renderer.setSize( footer.innerWidth(), footer.innerHeight() );

        }

        //

        function onDocumentMouseMove( event ) {

            mouseX = event.clientX - windowHalfX;
            mouseY = event.clientY - windowHalfY;

        }

        function onDocumentTouchStart( event ) {

            if ( event.touches.length === 1 ) {

                event.preventDefault();

                mouseX = event.touches[ 0 ].pageX - windowHalfX;
                mouseY = event.touches[ 0 ].pageY - windowHalfY;

            }

        }

        function onDocumentTouchMove( event ) {

            if ( event.touches.length === 1 ) {

                event.preventDefault();

                mouseX = event.touches[ 0 ].pageX - windowHalfX;
                mouseY = event.touches[ 0 ].pageY - windowHalfY;

            }

        }

        //

        function animate() {

            requestAnimationFrame( animate );

            render();
        }

        function render() {

            camera.lookAt( scene.position );

            var positions = particles.geometry.attributes.position.array;
            var scales = particles.geometry.attributes.scale.array;

            var i = 0, j = 0;

            for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

                for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

                    positions[ i + 1 ] = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) +
                        ( Math.sin( ( iy + count ) * 0.5 ) * 50 );

                    scales[ j ] = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 8 +
                        ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 8;

                    i += 3;
                    j ++;

                }

            }

            particles.geometry.attributes.position.needsUpdate = true;
            particles.geometry.attributes.scale.needsUpdate = true;

            renderer.render( scene, camera );

            count += 0.1;

        }

    </script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/perlin.js') }}"></script>

    <script src="{{ asset('js/demo3.js') }}"></script>
@endpush
