@extends("layouts.app")

		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->

                    <!--end breadcrumb-->
                    <div class="card">
                        <div class="card-body">
                            <div id="invoice">
                                <div class="toolbar hidden-print">
                                    <div class="text-end">
                                        <button type="button" class="btn btn-dark" style="background-color: #223175"><i class="fadeIn animated bx bx-arrow-back"></i> Regresar</button>
                                        <button type="button" class="btn btn-dark" style="background-color: #223175"><i class="fa fa-print"></i> Imprimir</button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Exportar a PDF</button>
                                    </div>
                                    <hr/>
                                </div>
                                <div class="invoice overflow-auto">
                                    <div style="min-width: 600px">
                                        <header style="border-bottom-color: #223175!important">
                                            <div class="row">
                                                <div class="col">
                                                    
                                                        <img src="assets/images/logo.png" width="350" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col company-details" style="color: black">
                                                    <div>16A Oriente Norte #170,
                                                        Col. Centro, <br>Tuxtla Gutiérrez, Chiapas, C.P. 29000</div>
                                                    <div>(961) 1176 570</div>
                                                    <div>info@serendipity.com</div>
                                                </div>
                                            </div>
                                        </header>
                                        <main>
                                            <div class="row contacts">
                                                <div class="col invoice-to">
                                                    <div class="text-gray-light">Facturar a:</div>
                                                    <h2 class="to">Miguel Angel</h2>
                                                    <div class="address">796 Silver Harbour, TX 79273, US</div>
                                                    <div class="email">john@example.com
                                                    </div>
                                                </div>
                                                <div class="col invoice-details">
                                                  
                                                    <div class="date">Fecha de la factura: 01/10/2022</div>
                                                    <div class="date">Fecha de vencimiento: 30/10/2022</div>
                                                </div>
                                            </div>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th># Orden</th>
                                                    <th class="text-center">Descripción</th>
                                                    <th class="text-center">$</th>
                                                    <th class="text-center">$</th>
                                                    <th class="text-center">TOTAL</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td class="no" style="background-color: rgb(133 32 57);text-align-last: center;">01</td>
                                                    <td class="text-left">
                                                        <h3  style="color:black!important">Intervención multidisciplinaria en la educación especial</h3>Adquirir habilidades teórico-prácticas de intervención en niños y jóvenes en los diferentes tipos de discapacidad, en el contexto escolar.</td>
                                                    <td class="unit">$40.00</td>
                                                    <td class="qty">30</td>
                                                    <td class="total" style="background-color: #223175;text-align-last: center;">$1,200.00</td>
                                                </tr>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">SUBTOTAL</td>
                                                    <td>$5,200.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">IVA 25%</td>
                                                    <td>$1,300.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">TOTAL</td>
                                                    <td>$6,500.00</td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <div class="thanks" style="font-size: x-large;">Gracias por adquirir nuestros servicios!</div>
                                            <div class="notices">
                                                <div>NOTA:</div>
                                                <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                                            </div>
                                        </main>
                                        {{-- <footer>Invoice was created on a computer and is valid without the signature and seal.</footer> --}}
                                    </div>
                                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endsection