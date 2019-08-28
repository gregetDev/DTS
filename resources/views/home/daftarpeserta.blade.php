@extends('layouts.app')

@section('title', 'Participants')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/elements_responsive.css')}}">
@endsection
	
@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/peserta.jpg')}}"data-speed="0.8"></div>
@endsection
    
@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Peserta</div>
                <div class="breadcrumbs ml-auto">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Daftar Peserta</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Accordions & Tabs -->

					<div class="elements_accordions_tabs">
						<center>
							<div class="cta_title text-center"><h2>Pengumuman Hasil Seleksi Calon Peserta Program Fresh
								Graduate Academy DigitalTalent Scholarship Tahun 2019
								Kementerian Komunikasi dan Informatika Republik Indonesia</h2>		
							</div>
						</center>
						<div class="row">
							<div class="col col-lg-12" id="tabs">
								<div class="tabs" >
									<div class="tabs_container">
                                        <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
                                            <?php
                                                $hal = @$_GET['page'];
                                                if(empty($hal)){
                                                    $hal = 1;
                                                }
                                                $jml = count($participants);
                                                $jml_hal = $participants->lastPage();
                                                for($i = 1; $i <= $jml_hal; $i++){
                                                    if($i != $hal){
                                                        echo "<div onclick=\"location.href='?page=$i#tabs';\" class=\"tab\"><a>DTS-2019 ML $i</a></div>";
                                                    }else {
                                                        echo "<div class=\"tab active\"><a>DTS-2019 ML $i</a></div>";
                                                    }
                                                }
                                            ?>
                                        </div>

										<div class="tab_panels">
											<div class="tab_panel active">
												<div class="tab_panel_content">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th scope="col">No.</th>
																	<th scope="col">Penyelenggara</th>
																	<th scope="col">Tema Pelatihan</th>
																	<th scope="col">Nama Peserta</th>
																	<th scope="col">Universitas</th>
																</tr>
															</thead>
															<tbody>
                                                                @foreach ($participants as $item)
                                                                    <tr>
                                                                    
                                                                        <td>{{($item->id)}}</td>
                                                                        <td>{{($item->penyelengara)}}</td>
                                                                        <td>{{($item->tema)}}</td>
                                                                        <td>{{($item->nama_peserta)}}</td>
                                                                        <td>{{($item->universitas)}}</td>
                                                                    
                                                                    </tr>
                                                                @endforeach
                                                                
                                                                </tbody>
                                                        </table>
                                                      {{-- {{($peserta->links())}} --}}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
 
@section('js')
    <script src="{{asset('/js/elements.js')}}"></script>   
    <script src="{{asset('/js/contact.js')}}"></script> 
@endsection