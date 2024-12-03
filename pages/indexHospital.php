<?php
    include( "../php/connection.php" )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas Hospitalarias Encuesta de Satisfacción</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <link rel="stylesheet" href="../CSS/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/area_Ambuatory/buttonBack.js"></script>
    <script src="../js/area_Hospital/showSections/showSectionHospital.js"></script>
    <script src="../js/area_Hospital/buttonsBack/buttongoBack_sections.js"></script>
    <script src="../js/area_Ambuatory/helpers/showSections.js"></script>

</head>
<body>
    <header>
        <div class="header-container">
            <h1>Encuesta de Satisfacción Áreas Hospitalarias</h1>
            <div class="header-actions">
                <button class="login-btn"><i class="fas fa-sign-in-alt"></i> </button>
            </div>
        </div>
    </header>

    <form id="formHospital" action="../index.php" method="POST">

        <div class="shift" id="shift">
            <div class="shiftsContainer">
                <h2 class="form-title"> Turno </h2>
                <div class="gender-container">

                    <div class="card" data-id="1" onclick="showSectionGender()">
                        <img src="../img/Matutino.png" alt="Matutino">
                        <div class="card-body" card-info="Matutino">
                            <strong>Matutino</strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showSectionGender()">
                        <img src="../img/Vespertino.png" alt="Vespertino">
                        <div class="card-body" card-info="Vespertino">
                            <strong>Vespertino</strong>
                        </div>
                    </div>

                    <div class="card" data-id="3" onclick="showSectionGender()">
                        <img src="../img/Nocturno.png" alt="Nocturno">
                        <div class="card-body" card-info="Nocturno">
                            <strong>Nocturno</strong>
                        </div>
                    </div>

                    <div class="card" data-id="4" onclick="showSectionGender()">
                        <img src="../img/Fin.png" alt="Fin_Semana">
                        <div class="card-body" card-info="Fin_Semana">
                            <strong> Fin de semana </strong>
                        </div>
                    </div>

                </div>
                <a href="../index.php#section1">
                    <button type="button" class="back-button">Regresar</button>
                </a>
            </div>
        </div>


        <div class="gender" id="gender">
            <div class="gendersContainer">
                <h2 class="form-title"> Género </h2>
                <div class="gender-container">

                    <div class="card" data-id="1" onclick="showSectionAge()">
                        <img src="../img/hombre.png" alt="Masculino">
                        <div class="card-body" card-info="Masculino">
                            <strong>Masculino</strong>
                        </div>                       
                    </div>
                                
                    <div class="card" data-id="2" onclick="showSectionAge()">
                        <img src="../img/mujer.png" alt="Femenino">
                        <div class="card-body" card-info="Femenino">
                            <strong>Femenino</strong>
                        </div>
                    </div>
                                        
                    <div class="card" data-id="3" onclick="showSectionAge()">
                        <img src="../img/otro.png" alt="Otro">
                        <div class="card-body" card-info="Otro">
                            <strong>Otro</strong>
                        </div>       
                    </div>

                </div>
                <button type="button" onclick="buttongoBackShift()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="ageUser" id="ageUser">
            <div class="agesUserContainer">
                <h2 class="form-title"> Edad </h2>
                <div class="age-container">

                    <div class="card" data-id="1" onclick="showSectionSatisfactionAtt()">
                        <img src="../img/niño.png" alt="Menor de 18 años">
                        <div class="card-body" card-info="Menor de 18 años">
                            <strong>Igual o menor de 18 años</strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showSectionSatisfactionAtt()">
                        <img src="../img/joven.png" alt="Entre 19 y 30 años">
                        <div class="card-body" card-info="Entre 19 y 30 años">
                            <strong>Entre 19 y 30 años</strong>
                        </div>
                    </div>
                    
                    <div class="card" data-id="3" onclick="showSectionSatisfactionAtt()">
                        <img src="../img/adulto1.png" alt="Entre 31 y 49 años">
                        <div class="card-body" card-info="Entre 31 y 49 años">
                            <strong>Entre 31 y 49 años</strong>
                        </div>
                    </div>

                    <div class="card" data-id="4" onclick="showSectionSatisfactionAtt()">
                        <img src="../img/viejito.png" alt="Entre 50 y 65 años">
                        <div class="card-body" card-info="Entre 50 y 65 años">
                            <strong>Entre 50 y 65 años</strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackGender()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="satisfaction_attention" id="satisfaction_attention">
            <div class="satisfactionAttContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho quedó con la atención recibida? </h2>
                <div class="attention-container">

                    <div class="card" data-id="1" onclick="showSectionFloors()">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente_Satisfecho">
                        <div class="card-body" card-info="Totalmente_Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showSectionFloors()">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>

                    <div class="card" data-id="3" onclick="showSectionFloors()">
                        <img src="../img/nada.png" alt="Nada_Satisfecho">
                        <div class="card-body" card-info="Nada_Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackAge()" class="back-button">Regresar</button>
            </div>
        </div>

        
        <div class="floors" id="floors">
            <div class="floorContainer">
                <h2 class="form-title"> Piso en el que fue atendido </h2>
                <div class="service-container">

                    <div class="card" data-floor="first" onclick="showSectionFloorServices( this.getAttribute( 'data-floor' ))">
                        <img src="../img/PP.png" alt="Primer_Piso">
                        <div class="card-body" card-info="Primer_Piso">
                            <strong> Primer piso </strong>
                        </div>
                    </div>

                    <div class="card" data-floor="second" onclick="showSectionFloorServices( this.getAttribute( 'data-floor' ))">
                        <img src="../img/SP.png" alt="Segundo_Piso">
                        <div class="card-body" card-info="Segundo_Piso">
                            <strong> Segundo piso </strong>
                        </div>
                    </div>

                    <div class="card" data-floor="third" onclick="showSectionFloorServices( this.getAttribute( 'data-floor' ))">
                        <img src="../img/TP.png" alt="Tercer_Piso">
                        <div class="card-body" card-info="Tercer_Piso">
                            <strong> Tercer piso </strong>
                        </div>
                    </div>

                    <div class="card" data-floor="fourth" onclick="showSectionFloorServices( this.getAttribute( 'data-floor' ))">
                        <img src="../img/CP.png" alt="Cuarto_Piso">
                        <div class="card-body" card-info="Cuarto_Piso">
                            <strong> Cuarto piso </strong>
                        </div>
                    </div>

                    <div class="card" data-id="5" onclick="showSectionReceiveAbuseQuestion()">
                        <img src="../img/Urgencias.png" alt="Urgencias">
                        <div class="card-body" card-info="Urgencias">
                            <strong> Urgencias </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackSectionFloors()" class="back-button">Regresar</button>
            </div>
        </div>
        


        <div class="firstFloor_Service" id="firstFloor_Service">
            <div class="firstFloor_Container">
                <h2 class="form-title"> Servicio de Primer Piso </h2>
                <div class="service-container">

                    <div class="card" data-id="1" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/Ginecoobstetricia.png" alt="Ginecologia y Obstetricia">
                        <div class="card-body" card-info="Ginecologia y Obstetricia">
                            <strong> Ginecología y Obstetricia </strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/Hematología.png" alt="Hematologia">
                        <div class="card-body" card-info="Hematologia">
                            <strong> Hematología </strong>
                        </div>
                    </div>
                            
                    <div class="card" data-id="3" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/Oncología.png" alt="Oncologia">
                        <div class="card-body" card-info="Oncologia">
                            <strong> Oncología </strong>
                        </div>
                    </div>
                        
                    <div class="card" data-id="4" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/Cirugía Oncologíca.png" alt="Cirugia_Oncologica">
                        <div class="card-body" card-info="Cirugia_Oncologica">
                            <strong> Cirugía Oncológica </strong>
                        </div>
                    </div>
                                                    
                    <div class="card" data-id="5" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/HP.png" alt="Hospitalización_Pediatria">
                        <div class="card-body" card-info="Hospitalización_Pediatria">
                            <strong> Hospitalización Pediatría </strong>
                        </div>
                    </div>

                    <div class="card" data-id="6" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/UCIN.png" alt="Unidad de Cuidados Intensivos Neonatales">
                        <div class="card-body" card-info="Unidad de Cuidados Intensivos Neonatales">
                            <strong> Unidad de Cuidados Intensivos Neonatales </strong>
                        </div>
                    </div>
                        
                    <div class="card" data-id="7" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/UTIN.png" alt="Unidad de Terapia Intermedia Neonatal">
                        <div class="card-body" card-info="UUnidad de Terapia Intermedia Neonatal">
                            <strong> Unidad de Terapia Intermedia Neonatal </strong>
                        </div>
                    </div>
                            
                    <div class="card" data-id="8" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/UTIP.png" alt="Unidad de Cuidados Intensivos Pediatrica">
                        <div class="card-body" card-info="Unidad de Cuidados Intermedios Pediatrica">
                            <strong> Unidad de Cuidados Intensivos Pediátrica </strong>
                        </div>
                    </div>
                        
                        
                    <div class="card" data-id="9" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/UTIP.png" alt="Unidad de Terapia Intermedia Pediatrica">
                        <div class="card-body" card-info="Unidad de Terapia Intermedia Pediatrica">
                            <strong> Unidad de Terapia Intermedia Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-id="10" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/Lactario.png" alt="Lactario">
                        <div class="card-body" card-info="Lactario">
                            <strong> Lactario </strong>
                        </div>
                    </div>
                        
                    <div class="card" data-id="11" onclick="showSectionDQReceiveAbuse( 'firstFloor_Service' )">
                        <img src="../img/UTPH.png" alt="Unidad de Trasplantes de Progenitores Hematopoyeticos">
                        <div class="card-body" card-info="Unidad de Trasplantes de Progenitores Hematopoyeticos">
                            <strong> Unidad de Trasplantes de Progenitores Hematopoyeticos </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackFloors()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="secondFloor_Service" id="secondFloor_Service">
            <div class="secondFloor_Container">
                <h2 class="form-title"> Servicio de Segundo Piso </h2>
                <div class="service-container">
                    
                    <div class="card" data-id="1" onclick="showSectionDQReceiveAbuse( 'secondFloor_Service' )">
                        <img src="../img/Cirugia General.png" alt="Cirugia_General">
                        <div class="card-body" card-info="Cirugia_General">
                            <strong> Cirugía General </strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showSectionDQReceiveAbuse( 'secondFloor_Service' )">
                        <img src="../img/Cirugía Cardiotorácica.png" alt="Cirugia_Cardiotoracica">
                        <div class="card-body" card-info="Cirugia_Cardiotoracica">
                            <strong> Cirugía Cardiotorácica </strong>
                        </div>
                    </div>

                    <div class="card" data-id="3" onclick="showSectionDQReceiveAbuse( 'secondFloor_Service' )">
                        <img src="../img/CB.png" alt="Bariatria">
                        <div class="card-body" card-info="Bariatria">
                            <strong> Cirugía Bariátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-id="4" onclick="showSectionDQReceiveAbuse( 'secondFloor_Service' )">
                        <img src="../img/Hemodinamia.png" alt="Hemodinamia">
                        <div class="card-body" card-info="Hemodinamia">
                            <strong> Hemodinamia </strong>
                        </div>
                    </div>

                    <div class="card" data-id="5" onclick="showSectionDQReceiveAbuse( 'secondFloor_Service' )">
                        <img src="../img/UTIA.png" alt="Unidad de Terapia Intermedia Adultos">
                        <div class="card-body" card-info="Unidad de Terapia Intermedia Adultos">
                            <strong> Unidad de Terapia Intermedia Adultos </strong>
                        </div>
                    </div>

                    <div class="card" data-id="6" onclick="showSectionDQReceiveAbuse( 'secondFloor_Service' )">
                        <img src="../img/UCIA.png" alt="Unidad de Cuidados Intensivos Adultos">
                        <div class="card-body" card-info="Unidad de Cuidados Intensivos Adultos">
                            <strong> Unidad de Cuidados Intensivos Adultos </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackFloors()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="thirdFloor_Service" id="thirdFloor_Service">
            <div class="thirdFloor_Container">
                <h2 class="form-title"> Servicio de Tercer Piso </h2>
                <div class="service-container">
                    
                    <div class="card" data-id="1" onclick="showSectionDQReceiveAbuse( 'thirdFloor_Service' )">
                        <img src="../img/Traumatología y Ortopedia.png" alt="Traumatologia y Ortopedia">
                        <div class="card-body" card-info="Traumatología y Ortopedia">
                            <strong> Traumatología y Ortopedia </strong>
                        </div>
                    </div>
                                
                    <div class="card" data-id="2" onclick="showSectionDQReceiveAbuse( 'thirdFloor_Service' )">
                        <img src="../img/Neurocirugía.png" alt="Neurocirugia">
                        <div class="card-body" card-info="Neurocirugia">
                            <strong> Neurocirugía </strong>
                        </div>
                    </div>         

                                
                    <div class="card" data-id="3" onclick="showSectionDQReceiveAbuse( 'thirdFloor_Service' )">
                        <img src="../img/Uro.png" alt="Urologia">
                        <div class="card-body" card-info="Urologia">
                            <strong> Urología </strong>
                        </div>
                    </div>         
                                
                    <div class="card" data-id="4" onclick="showSectionDQReceiveAbuse( 'thirdFloor_Service' )">
                        <img src="../img/Trasplante.png" alt="Trasplantes">
                        <div class="card-body" card-info="Trasplantes">
                            <strong> Trasplantes </strong>
                        </div>
                    </div> 
                    
                </div>
                <button type="button" onclick="buttongoBackFloors()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="fourthFloor_Service" id="fourthFloor_Service">
            <div class="thirdFloor_Container">
                <h2 class="form-title"> Servicio de Cuarto Piso </h2>
                <div class="service-container">
                    
                    <div class="card" data-id="1" onclick="showSectionDQReceiveAbuse( 'fourthFloor_Service' )">
                        <img src="../img/Medicina Interna.png" alt="Medicina Interna">
                        <div class="card-body" card-info="Medicina Interna">
                            <strong>Medicina Interna"</strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackFloors()" class="back-button">Regresar</button>
            </div>
        </div>

        <div class="DQReceiveAbuse" id="DQReceiveAbuse">
            <div class="questionContainer">
                <h2 class="form-title"> ¿Recibió algún tipo de maltrato por el personal? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-id="1" onclick="showSectionTypeStaff( true )">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong>Sí</strong>
                            </div>
                        </div>
                        <div class="card" data-id="2" onclick="showSectionTypeStaff( false )">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong>No</strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="buttongoBackFloors()" class="back-button">Regresar</button>
            </div>
        </div>

        <div class="typeStaff" id="typeStaff">
            <div class="typeStaffContainer">
                <h2 class="form-title"> ¿De qué tipo de personal recibió maltrato? </h2>
                <div class="service-container">

                    <div class="card" data-id="1" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/personalmedico.png" alt="Personal Medico">
                        <div class="card-body" card-info="Personal Medico">
                            <strong> Personal Médico </strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/enfermeria.png" alt="Personal Enfermeria">
                        <div class="card-body" card-info="Personal Enfermeria">
                            <strong> Personal de Enfermería </strong>
                        </div>
                    </div>

                    <div class="card" data-id="3" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/Personal_Nutricion.png" alt="Personal Nutricion">
                        <div class="card-body" card-info="Personal Nutricion">
                            <strong> Personal de Nutrición </strong>
                        </div>
                    </div>

                    <div class="card" data-id="4" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/recepcion.png" alt=" Personal Recepcion ">
                        <div class="card-body" card-info=" Personal Recepcion ">
                            <strong> Personal de Recepción </strong>
                        </div>
                    </div>

                    <div class="card" data-id="5" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/trabajosocial.png" alt="Personal TrabajoSocial">
                        <div class="card-body" card-info="Personal TrabajoSocial">
                            <strong> Personal de Trabajo Social </strong>
                        </div>
                    </div>

                    <div class="card" data-id="6" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/laboratorio1.png" alt="Personal Laboratorio">
                        <div class="card-body" card-info="Personal Laboratorio">
                            <strong> Personal de Laboratorio </strong>
                        </div>
                    </div>

                    <div class="card" data-id="7" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/personal_imagen1.png" alt="Personal Imagen">
                        <div class="card-body" card-info="Personal Imagen">
                            <strong> Personal de Imagen </strong>
                        </div>
                    </div>

                    <div class="card" data-id="8" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/personalvigielancia.png" alt="Personal Vigilancia">
                        <div class="card-body" card-info="Personal Vigilancia">
                            <strong> Personal de Vigilancia </strong>
                        </div>
                    </div>

                    <div class="card" data-id="9" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/personal_kisoko.png" alt="Personal Kiosco">
                        <div class="card-body" card-info="Personal Kiosco">
                            <strong> Personal de Kiosco </strong>
                        </div>
                    </div>

                    <div class="card" data-id="10" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/personal_limpieza.png" alt="Personal Limpieza">
                        <div class="card-body" card-info="Personal Limpieza">
                            <strong> Personal de Limpieza </strong>
                        </div>
                    </div>


                    <div class="card" data-id="11" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/personal_banco_Sangre.png" alt="Personal BancoSangre">
                        <div class="card-body" card-info="Personal BancoSangre">
                            <strong> Personal de Banco de Sangre </strong>
                        </div>
                    </div>

                    <div class="card" data-id="12" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/Personal_Quimioterapia.png" alt="Personal Quimioterapia">
                        <div class="card-body" card-info="Personal Quimioterapia">
                            <strong> Personal de Quimioterapia </strong>
                        </div>
                    </div>

                    <div class="card" data-id="13" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/Personal_Radioterapia.png" alt="Personal Radioterapia">
                        <div class="card-body" card-info="Personal Radioterapia">
                            <strong> Personal de Radioterapia </strong>
                        </div>
                    </div>

                    <div class="card" data-id="14" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/Personal_Farmacia.png" alt="Personal Farmacia">
                        <div class="card-body" card-info="Personal Farmacia">
                            <strong> Personal de Farmacia </strong>
                        </div>
                    </div>

                    <div class="card" data-id="15" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/Personal_camilleria.png" alt="Personal Camilleria">
                        <div class="card-body" card-info="Personal Camilleria">
                            <strong> Personal de Camilleria </strong>
                        </div>
                    </div>

                    <div class="card" data-id="16" onclick="showSectionDQTreatmentFriendly('typeStaff')">
                        <img src="../img/Personal_Auxiliar.png" alt="Personal Auxiliar">
                        <div class="card-body" card-info="Personal Auxiliar">
                            <strong> Personal Auxiliar </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackMenuFloors()" class="back-button">Regresar</button>
            </div>
        </div>

        <div class="DQTreatmentFriendly" id="DQTreatmentFriendly">
            <div class="questionContainer">
                <h2 class="form-title"> ¿El trato que recibió del personal fue amable y respetuoso? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-id="1" onclick="showSectionSatisfactionMedical()">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong>Sí</strong>
                            </div>
                        </div>

                        <div class="card" data-id="2" onclick="showSectionSatisfactionMedical()">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong>No</strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="buttongoBackSectionPre()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="satisfactionMedicalCare" id="satisfactionMedicalCare">
            <div class="satisfactionContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho quedo con la atención del Médico, (le brindo una atención amable y recibió información clara sobre su padecimiento)? </h2>
                <div class="attention-container">

                    <div class="card" data-id="1" onclick="showSatisfactionMedicalCare()">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente Satisfecho">
                        <div class="card-body" card-info="Totalmente Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="2" onclick="showSatisfactionMedicalCare()">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="3" onclick="showSatisfactionMedicalCare()">
                        <img src="../img/nada.png" alt="Nada Satisfecho">
                        <div class="card-body" card-info="Nada Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackSectionTreatmentFriendly()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="nurseExplication_care" id="nurseExplication_care">
            <div class="nurseExplicationContainer">
                <h2 class="form-title"> ¿La explicación que la enfermera le brindó sobre los cuidados que llevara en casa, fue clara y precisa? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-id="1" onclick="showOrientationContinuity()">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong>Sí</strong>
                            </div>
                        </div>

                        <div class="card" data-id="2" onclick="showOrientationContinuity()">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong>No</strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="buttongoBackSatisfactionMedicalCare()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="orientationContinuity" id="orientationContinuity">
            <div class="questionContainer">
                <h2 class="form-title"> ¿Recibió orientación por parte del personal sobre los tramites a realizar para la continuidad de su atención? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-id="1" onclick="showSectionPatientRights()">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong>Sí</strong>
                            </div>
                        </div>

                        <div class="card" data-id="2" onclick="showSectionPatientRights()">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong>No</strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="buttongoBackNurseExplication_care()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="patientRights" id="patientRights">
            <div class="questionContainer">
                <h2 class="form-title"> ¿Consultaste o te informaron sobre los derechos como paciente? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-id="1" onclick="showSectionSatisfactionCleaning()">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong>Sí</strong>
                            </div>
                        </div>

                        <div class="card" data-id="2" onclick="showSectionSatisfactionCleaning()">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong>No</strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="buttongoBackOrientationContinuity()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="satisfactionCleaning" id="satisfactionCleaning">
            <div class="satisfactionContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho esta con la limpieza, higiene e instalaciones del hospital? </h2>
                <div class="attention-container">

                    <div class="card" data-id="1" onclick="showSatisfactionFoodHospitalization()">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente Satisfecho">
                        <div class="card-body" card-info="Totalmente Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="2" onclick="showSatisfactionFoodHospitalization()">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="3" onclick="showSatisfactionFoodHospitalization()">
                        <img src="../img/nada.png" alt="Nada Satisfecho">
                        <div class="card-body" card-info="Nada Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackPatientRights()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="satisfaction_foodHospitalization" id="satisfaction_foodHospitalization">
            <div class="satisfactionContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho está con los alimentos otorgados durante su hospitalización? </h2>
                <div class="attention-container">

                    <div class="card" data-id="1" onclick="showSatisfactionExperienceHRAEI()">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente Satisfecho">
                        <div class="card-body" card-info="Totalmente Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="2" onclick="showSatisfactionExperienceHRAEI()">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="3" onclick="showSatisfactionExperienceHRAEI()">
                        <img src="../img/nada.png" alt="Nada Satisfecho">
                        <div class="card-body" card-info="Nada Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackSatisfactionCleaning()" class="back-button">Regresar</button>
            </div>
        </div>

        <div class="satisfactionExperienceHRAEI" id="satisfactionExperienceHRAEI">
            <div class="satisfactionContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho estás con tu experiencia en el Hospital Regional de Alta Especialidad de Ixtapaluca? </h2>
                <div class="attention-container">

                    <div class="card" data-id="1" onclick="showEndSection()">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente Satisfecho">
                        <div class="card-body" card-info="Totalmente Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="2" onclick="showEndSection()">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-id="3" onclick="showEndSection()">
                        <img src="../img/nada.png" alt="Nada Satisfecho">
                        <div class="card-body" card-info="Nada Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="buttongoBackFoodHospitalization()" class="back-button">Regresar</button>
            </div>
        </div>

    </form>

    
    <div  class="feedbackSection" id="feedbackSection" style="text-align: center; margin-top: 20px;">
        <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 40px;">
            Gracias por tomarse el tiempo para compartir sus opiniones.
        </p>
        <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 40px;">
            Su retroalimentación es muy valioso para nosotros y nos ayuda a mejorar continuamente.
        </p>
        <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 60px;">
            ¡Hasta la próxima!
        </p>
        <button id="endSurveySatisfaction" class="button-link" type="submit"> Terminar Encuesta </button>

    </div>

</body>
</html>