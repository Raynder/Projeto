@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Simular</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">simular</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Criação de XML</h3>
                        </div>
                        <!-- /.card-header -->

                        <form>
                            <div style="display: flex;">
                                <div class="card card-success" style="padding: 0;margin:5px;">
                                    <div class="card-header">
                                        <h3 class="card-title">Identificação</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Código da UF</label>
                                                    <input type="text" class="form-control" name="cUP">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Código NF</label>
                                                    <input type="text" class="form-control" name="cNF">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Natureza OP</label>
                                                    <input type="text" class="form-control" placeholder="Venda" name="natOp">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Mod</label>
                                                    <input type="text" class="form-control" placeholder="55" name="mod">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Serie</label>
                                                    <input type="text" class="form-control" value="1" name="serie">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Número NF</label>
                                                    <input type="text" class="form-control" name="nNf">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tipo NF</label>
                                                    <select name="tpNf" id="tpNf" class="form-control">
                                                        <option value="1">Entrada</option>
                                                        <option value="0">Saída</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Id Destinatario</label>
                                                    <input type="text" class="form-control" name="idDest" placeholder="Dentro ou fora do estado">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Cod Municipio de Fato Gerador</label>
                                                    <input type="text" class="form-control" name="cMunFG">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tipo Impressão</label>
                                                    <select name="tpImp" id="tpImp" class="form-control">
                                                        <option value="1">Retrato</option>
                                                        <option value="2">Paisagem</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tipo Emissão</label>
                                                    <select name="tpEmis" id="tpEmis" class="form-control">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Contingência FS</option>
                                                        <option value="3">Contingência SCAN</option>
                                                        <option value="4">Contingência DPEC</option>
                                                        <option value="5">Contingência FS-DA</option>
                                                        <option value="6">Contingência SVC-AN</option>
                                                        <option value="7">Contingência SVC-RS</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Digito Verificador</label>
                                                    <input type="text" class="form-control" name="cDV">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Tipo Ambiente</label>
                                                    <input type="text" class="form-control" name="tpAmb">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Finalidade NFe</label>
                                                    <input type="text" class="form-control" name="finNFe">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Indicador Consumidor Final</label>
                                                    <input type="text" class="form-control" name="indFinal">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Indicador Presença</label>
                                                    <input type="text" class="form-control" name="indPres">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Indicador Intermediário</label>
                                                    <input type="text" class="form-control" name="indIntermed">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Processo Emissão</label>
                                                    <input type="text" class="form-control" name="procEmi">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Versão Processo</label>
                                                    <input type="text" class="form-control" name="verProc">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Data Hora Contingência</label>
                                                    <input type="text" class="form-control" name="dhCont">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Justificativa Contingência</label>
                                                    <input type="text" class="form-control" name="xJust">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="card card-warning" style="padding: 0;margin:5px;">
                                    <div class="card-header">
                                        <h3 class="card-title">Configuração do XML</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Tipo de Ambiente</label>
                                                        <select class="form-control">
                                                            <option>2 - Produção</option>
                                                            <option>1 - Homologação</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>Atualização</label>
                                                        <input type="text" class="form-control" value="2015-10-02 06:01:21">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Versão</label>
                                                        <input type="text" class="form-control" value="4.00">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Schemes</label>
                                                        <input type="text" class="form-control" value="PL_009_V4">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Token IBPT</label>
                                                        <input type="text" class="form-control" value="AAAAAAA">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>CSCid</label>
                                                        <input type="text" class="form-control" value="000002">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>CSC</label>
                                                        <input type="text" class="form-control" value="GPB0JBWLUR6HWFTVEAS6RJ69GPCROFPBBB8G">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Razão Social</label>
                                                        <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Sigla UF</label>
                                                        <select name="siglauf" id="siglauf" class="form-control">
                                                            <option value="AC">AC</option>
                                                            <option value="AL">AL</option>
                                                            <option value="AP">AP</option>
                                                            <option value="AM">AM</option>
                                                            <option value="BA">BA</option>
                                                            <option value="CE">CE</option>
                                                            <option value="DF">DF</option>
                                                            <option value="ES">ES</option>
                                                            <option value="GO">GO</option>
                                                            <option value="MA">MA</option>
                                                            <option value="MT">MT</option>
                                                            <option value="MS">MS</option>
                                                            <option value="MG">MG</option>
                                                            <option value="PA">PA</option>
                                                            <option value="PB">PB</option>
                                                            <option value="PR">PR</option>
                                                            <option value="PE">PE</option>
                                                            <option value="PI">PI</option>
                                                            <option value="RJ">RJ</option>
                                                            <option value="RN">RN</option>
                                                            <option value="RS">RS</option>
                                                            <option value="RO">RO</option>
                                                            <option value="RR">RR</option>
                                                            <option value="SC">SC</option>
                                                            <option value="SP">SP</option>
                                                            <option value="SE">SE</option>
                                                            <option value="TO">TO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="card card-warning" style="padding: 0;margin:5px;">
                                    <div class="card-header">
                                        <h3 class="card-title">Configuração do XML</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label>Razão Social</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="xNome">
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label>Nome Fantasia</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="xFant">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Inscrição Estadual</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="IE">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Inscri Est Sub Trib</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="IEST">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>Inscri Municipal</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="IM">
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label>CNAE Fiscal</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="CNAE">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Código de Regime Tributário</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="CRT">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>CNPJ</label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="CNPJ">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>CPF </label>
                                                    <input type="text" class="form-control" placeholder="Fake Produtos Tecnologia Ltda" name="CPF">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                               
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection