
    //Buttons Back Pages

    function buttongoBackIndex(){
        document.getElementById( "containerMain" ).style.display = "block";
        document.getElementById( "section1" ).style.display      = "none";
    }
    
    function buttongoBackShift(){
        document.getElementById( "gender" ).style.display = "none";
        document.getElementById( "shift" ).style.display  = "block";
    }

    function buttongoBackGender(){
        document.getElementById( "ageUser" ).style.display = "none";
        document.getElementById( "gender" ).style.display  = "block";
    }

    function buttongoBackAge(){
        document.getElementById( "satisfaction_attention" ).style.display = "none";
        document.getElementById( "ageUser" ).style.display  = "block";
    }
    
    function buttongoBackSatisfactionAtt(){
        document.getElementById( "timeAtt" ).style.display = "none";
        document.getElementById( "satisfaction_attention" ).style.display  = "block";
    }
    function buttongoBackTimeAtt(){
        document.getElementById( "typeService" ).style.display  = "none";
        document.getElementById( "timeAtt" ).style.display      = "block";
    }
    function buttongoBackTypeService(){
        document.getElementById( "tipoConsultaExterna" ).style.display = "none";
        document.getElementById( "typeService" ).style.display         = "block";
    }
    function buttongoBackTypeService() {
        const hiddenElements = document.querySelectorAll( "#tipoConsultaExterna, #unidadApoyo , #clinicas, #auxiliares, #DQReceiveAbuse" );
        hiddenElements.forEach( element => {
            element.style.display = "none";
        });

        document.getElementById( "typeService" ).style.display = "block";
    }

    function buttongoBackTypesConsultasExt(){
        const hiddenElements = document.querySelectorAll( "#consultaExtAdultos , #consultaExtPediatrica" );
        hiddenElements.forEach( element => {
            element.style.display = "none";
        });

        document.getElementById( "tipoConsultaExterna" ).style.display = "block";
    }
    
    function buttongoBackDQReceiveAbuse() {
        document.getElementById( "DQReceiveAbuse" ).style.display = "none";
        document.getElementById( "typeService" ).style.display    = "block";
    }
    
    function buttongoBackMenuServices(){
        document.getElementById( "typeStaff" ).style.display   = "none";
        document.getElementById( "typeService" ).style.display = "block";
    }

    function buttongoBackSectionPre() {
        document.getElementById( "DQTreatmentFriendly" ).style.display = "none";
        document.getElementById( "DQReceiveAbuse" ).style.display      = "block";
    }
    
    function buttongoBackSectionTreatmentFriendly(){
        document.getElementById( "satisfactionMedicalCare" ).style.display = "none";
        document.getElementById( "DQTreatmentFriendly" ).style.display     = "block";
    }

    function buttongoBackSectioNursingSatisfaction(){
        document.getElementById( "nursingSatisfaction" ).style.display     = "none";
        document.getElementById( "satisfactionMedicalCare" ).style.display = "block";
    }

    function buttongoBackSectionOrientationContinuity(){
        document.getElementById( "orientationContinuity" ).style.display = "none";
        document.getElementById( "nursingSatisfaction" ).style.display   = "block";
    }

    function buttongoBackSectionPatientRights(){
        document.getElementById( "patientRights" ).style.display         = "none";
        document.getElementById( "orientationContinuity" ).style.display = "block";
    }

    function buttongoBackSectionSatisfactionCleaning(){
        document.getElementById( "satisfactionCleaning" ).style.display = "none";
        document.getElementById( "patientRights" ).style.display        = "block";
    }

    function buttongoBackSectionSatisfactionExperienceHRAEI(){
        document.getElementById( "satisfactionExperienceHRAEI" ).style.display = "none";
        document.getElementById( "satisfactionCleaning" ).style.display        = "block";
    }

 
    

    
    // Show Pages Sections

    function showSectionGender(){
        document.getElementById( "shift" ).style.display  = "none";
        document.getElementById( "gender" ).style.display = "block";
    }


    function showSectionAge(){
        document.getElementById( "gender" ).style.display  = "none";
        document.getElementById( "ageUser" ).style.display = "block";
    }

    function showSectionSatisfactionAtt(){
        document.getElementById( "ageUser" ).style.display = "none";
        document.getElementById( "satisfaction_attention" ).style.display = "block";
    }

    function showSectionTimeAtt(){
        document.getElementById( "satisfaction_attention" ).style.display = "none";
        document.getElementById( "timeAtt" ).style.display = "block";
    }

    function showSectionTypeService(){
        document.getElementById( "timeAtt" ).style.display      = "none";
        document.getElementById( "typeService" ).style.display  = "block";
    }

    function showSectionConsultaExtAdultos(){
        document.getElementById( "tipoConsultaExterna" ).style.display = "none";
        document.getElementById( "consultaExtAdultos" ).style.display  = "block";
    }

    function showSectionConsultaExtPediatrica(){
        document.getElementById( "tipoConsultaExterna" ).style.display = "none";
        document.getElementById( "consultaExtPediatrica" ).style.display = "block";
    }
    
    function showSectionUnidadApoyo() {
        document.getElementById( "typeService" ).style.display = "none";    // Ocultar la sección de servicios
        document.getElementById( "unidadApoyo" ).style.display = "block";   // Mostrar Unidad de Apoyo
    }

    function showSectionClinicas(){
        document.getElementById( "typeService" ).style.display = "none";   
        document.getElementById( "clinicas" ).style.display = "block";
    }

    function showSectionDQ(){
        document.getElementById( "typeService" ).style.display = "none";
        document.getElementById( "DQReceiveAbuse" ).style.display = "block";
    }

    function showSectionAux(){
        document.getElementById( "typeService" ).style.display = "none";
        document.getElementById( "auxiliares" ).style.display = "block";
    }

    function showSectionSatisfactionMedical(){
        document.getElementById( "DQTreatmentFriendly" ).style.display = "none";
        document.getElementById( "satisfactionMedicalCare" ).style.display = "block";
    }

    function showSectionNursingSatisfaction(){
        document.getElementById( "satisfactionMedicalCare" ).style.display = "none";
        document.getElementById( "nursingSatisfaction" ).style.display = "block";
    }

    function showSectionOrientationContinuity(){
        document.getElementById( "nursingSatisfaction" ).style.display = "none";
        document.getElementById( "orientationContinuity" ).style.display = "block";
    }

    function showSectionPatientRights(){
        document.getElementById( "orientationContinuity" ).style.display = "none";
        document.getElementById( "patientRights" ).style.display = "block";
    }

    function showSectionSatisfactionCleaning(){
        document.getElementById( "patientRights" ).style.display = "none";
        document.getElementById( "satisfactionCleaning" ).style.display = "block";
    }
    
    function showSectionSatisfactionExperienceHRAEI(){
        document.getElementById( "satisfactionCleaning" ).style.display = "none";
        document.getElementById( "satisfactionExperienceHRAEI" ).style.display = "block";
    }

    function showEndSection(){
        document.getElementById( "satisfactionExperienceHRAEI" ).style.display = "none";
        document.getElementById( "feedbackSection" ).style.display = "block";
    }
    
