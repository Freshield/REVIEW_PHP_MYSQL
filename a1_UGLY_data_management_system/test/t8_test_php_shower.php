<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST select</title>
    <link rel="stylesheet" type="text/css" href="t8_style.css" />
</head>
<body>

<p>
    Test table select
</p>

<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-20
 * Time: 上午11:09
 */

if (isset($_POST['submit'])) {
    // Grab the score data from the POST
    $dicom_patient_sex = $_POST['dicom_patient_sex'];
    $dicom_hospital_name = $_POST['dicom_hospital_name'];
    $dicom_modality = $_POST['dicom_modality'];
    $dicom_is_normal = $_POST['dicom_is_normal'];

    $name_array = array();
    $Body = $_POST['Body'];
    array_push($name_array, $Body);

    $Artery = $_POST['Artery'];
    array_push($name_array, $Artery);

    $CCA_L = $_POST['CCA_L'];
    array_push($name_array, $CCA_L);

    $CCA_R = $_POST['CCA_R'];
    array_push($name_array, $CCA_R);

    $ICA_L = $_POST['ICA_L'];
    array_push($name_array, $ICA_L);

    $ECA_L = $_POST['ECA_L'];
    array_push($name_array, $ECA_L);

    $ICA_R = $_POST['ICA_R'];
    array_push($name_array, $ICA_R);

    $ECA_R = $_POST['ECA_R'];
    array_push($name_array, $ECA_R);

    $Vertebral_A_L = $_POST['Vertebral_A_L'];
    array_push($name_array, $Vertebral_A_L);

    $Vertebral_A_R = $_POST['Vertebral_A_R'];
    array_push($name_array, $Vertebral_A_R);

    $Subclavian_A_L = $_POST['Subclavian_A_L'];
    array_push($name_array, $Subclavian_A_L);

    $Subclavian_A_R = $_POST['Subclavian_A_R'];
    array_push($name_array, $Subclavian_A_R);

    $IMA_L = $_POST['IMA_L'];
    array_push($name_array, $IMA_L);

    $IMA_R = $_POST['IMA_R'];
    array_push($name_array, $IMA_R);

    $Ascendens_A = $_POST['Ascendens_A'];
    array_push($name_array, $Ascendens_A);

    $Arch_A = $_POST['Arch_A'];
    array_push($name_array, $Arch_A);

    $LAD = $_POST['LAD'];
    array_push($name_array, $LAD);

    $Descendens_A = $_POST['Descendens_A'];
    array_push($name_array, $Descendens_A);

    $Pulmonary_A = $_POST['Pulmonary_A'];
    array_push($name_array, $Pulmonary_A);

    $CIA_L = $_POST['CIA_L'];
    array_push($name_array, $CIA_L);

    $CIA_R = $_POST['CIA_R'];
    array_push($name_array, $CIA_R);

    $Vein = $_POST['Vein'];
    array_push($name_array, $Vein);

    $IJV_L = $_POST['IJV_L'];
    array_push($name_array, $IJV_L);

    $IJV_R = $_POST['IJV_R'];
    array_push($name_array, $IJV_R);

    $EJV_R = $_POST['EJV_R'];
    array_push($name_array, $EJV_R);

    $EJV_L = $_POST['EJV_L'];
    array_push($name_array, $EJV_L);

    $Subclavian_V_L = $_POST['Subclavian_V_L'];
    array_push($name_array, $Subclavian_V_L);

    $Subclavian_V_R = $_POST['Subclavian_V_R'];
    array_push($name_array, $Subclavian_V_R);

    $BCV_L = $_POST['BCV_L'];
    array_push($name_array, $BCV_L);

    $BCV_R = $_POST['BCV_R'];
    array_push($name_array, $BCV_R);

    $IMV_L = $_POST['IMV_L'];
    array_push($name_array, $IMV_L);

    $IMV_R = $_POST['IMV_R'];
    array_push($name_array, $IMV_R);

    $SVC = $_POST['SVC'];
    array_push($name_array, $SVC);

    $Pulmonary_V = $_POST['Pulmonary_V'];
    array_push($name_array, $Pulmonary_V);

    $Azygos_V = $_POST['Azygos_V'];
    array_push($name_array, $Azygos_V);

    $IVC = $_POST['IVC'];
    array_push($name_array, $IVC);

    $CIV_L = $_POST['CIV_L'];
    array_push($name_array, $CIV_L);

    $CIV_R = $_POST['CIV_R'];
    array_push($name_array, $CIV_R);

    $LNM_P = $_POST['LNM_P'];
    array_push($name_array, $LNM_P);

    $LNM_N = $_POST['LNM_N'];
    array_push($name_array, $LNM_N);

    $LNM_S = $_POST['LNM_S'];
    array_push($name_array, $LNM_S);

    $LN = $_POST['LN'];
    array_push($name_array, $LN);

    $SpinalCord = $_POST['SpinalCord'];
    array_push($name_array, $SpinalCord);

    $SpinalCord_C = $_POST['SpinalCord_C'];
    array_push($name_array, $SpinalCord_C);

    $SpinalCord_T = $_POST['SpinalCord_T'];
    array_push($name_array, $SpinalCord_T);

    $SpinalCord_L = $_POST['SpinalCord_L'];
    array_push($name_array, $SpinalCord_L);

    $Vertebra_C = $_POST['Vertebra_C'];
    array_push($name_array, $Vertebra_C);

    $C1 = $_POST['C1'];
    array_push($name_array, $C1);

    $C2 = $_POST['C2'];
    array_push($name_array, $C2);

    $C3 = $_POST['C3'];
    array_push($name_array, $C3);

    $C4 = $_POST['C4'];
    array_push($name_array, $C4);

    $C5 = $_POST['C5'];
    array_push($name_array, $C5);

    $C6 = $_POST['C6'];
    array_push($name_array, $C6);

    $C7 = $_POST['C7'];
    array_push($name_array, $C7);

    $Vertebra_T = $_POST['Vertebra_T'];
    array_push($name_array, $Vertebra_T);

    $T1 = $_POST['T1'];
    array_push($name_array, $T1);

    $T2 = $_POST['T2'];
    array_push($name_array, $T2);

    $T3 = $_POST['T3'];
    array_push($name_array, $T3);

    $T4 = $_POST['T4'];
    array_push($name_array, $T4);

    $T5 = $_POST['T5'];
    array_push($name_array, $T5);

    $T6 = $_POST['T6'];
    array_push($name_array, $T6);

    $T7 = $_POST['T7'];
    array_push($name_array, $T7);

    $T8 = $_POST['T8'];
    array_push($name_array, $T8);

    $T9 = $_POST['T9'];
    array_push($name_array, $T9);

    $T10 = $_POST['T10'];
    array_push($name_array, $T10);

    $T11 = $_POST['T11'];
    array_push($name_array, $T11);

    $T12 = $_POST['T12'];
    array_push($name_array, $T12);

    $Vertebra_L = $_POST['Vertebra_L'];
    array_push($name_array, $Vertebra_L);

    $L1 = $_POST['L1'];
    array_push($name_array, $L1);

    $L2 = $_POST['L2'];
    array_push($name_array, $L2);

    $L3 = $_POST['L3'];
    array_push($name_array, $L3);

    $L4 = $_POST['L4'];
    array_push($name_array, $L4);

    $L5 = $_POST['L5'];
    array_push($name_array, $L5);

    $FullBrain = $_POST['FullBrain'];
    array_push($name_array, $FullBrain);

    $Brain = $_POST['Brain'];
    array_push($name_array, $Brain);

    $Cerebellum = $_POST['Cerebellum'];
    array_push($name_array, $Cerebellum);

    $FrontalLobe = $_POST['FrontalLobe'];
    array_push($name_array, $FrontalLobe);

    $ParietalLobe = $_POST['ParietalLobe'];
    array_push($name_array, $ParietalLobe);

    $TemporalLobe_L = $_POST['TemporalLobe_L'];
    array_push($name_array, $TemporalLobe_L);

    $TemporalLobe_R = $_POST['TemporalLobe_R'];
    array_push($name_array, $TemporalLobe_R);

    $OccipitalLobe = $_POST['OccipitalLobe'];
    array_push($name_array, $OccipitalLobe);

    $BrainStem = $_POST['BrainStem'];
    array_push($name_array, $BrainStem);

    $Eyes = $_POST['Eyes'];
    array_push($name_array, $Eyes);

    $Eye_L = $_POST['Eye_L'];
    array_push($name_array, $Eye_L);

    $Eye_R = $_POST['Eye_R'];
    array_push($name_array, $Eye_R);

    $Lens_L = $_POST['Lens_L'];
    array_push($name_array, $Lens_L);

    $Lens_R = $_POST['Lens_R'];
    array_push($name_array, $Lens_R);

    $OpticNerve = $_POST['OpticNerve'];
    array_push($name_array, $OpticNerve);

    $OpticNerve_L = $_POST['OpticNerve_L'];
    array_push($name_array, $OpticNerve_L);

    $OpticNerve_R = $_POST['OpticNerve_R'];
    array_push($name_array, $OpticNerve_R);

    $OpticChiasm = $_POST['OpticChiasm'];
    array_push($name_array, $OpticChiasm);

    $Pituitary = $_POST['Pituitary'];
    array_push($name_array, $Pituitary);

    $Cochlea = $_POST['Cochlea'];
    array_push($name_array, $Cochlea);

    $Cochlea_L = $_POST['Cochlea_L'];
    array_push($name_array, $Cochlea_L);

    $Cochlea_R = $_POST['Cochlea_R'];
    array_push($name_array, $Cochlea_R);

    $Laryngopharynx = $_POST['Laryngopharynx'];
    array_push($name_array, $Laryngopharynx);

    $Oropharynx = $_POST['Oropharynx'];
    array_push($name_array, $Oropharynx);

    $Larynx = $_POST['Larynx'];
    array_push($name_array, $Larynx);

    $Mandible = $_POST['Mandible'];
    array_push($name_array, $Mandible);

    $TMJ_L = $_POST['TMJ_L'];
    array_push($name_array, $TMJ_L);

    $TMJ_R = $_POST['TMJ_R'];
    array_push($name_array, $TMJ_R);

    $Mandible_L = $_POST['Mandible_L'];
    array_push($name_array, $Mandible_L);

    $Mandible_R = $_POST['Mandible_R'];
    array_push($name_array, $Mandible_R);

    $Parotid = $_POST['Parotid'];
    array_push($name_array, $Parotid);

    $Parotid_L = $_POST['Parotid_L'];
    array_push($name_array, $Parotid_L);

    $Parotid_R = $_POST['Parotid_R'];
    array_push($name_array, $Parotid_R);

    $Thyroid = $_POST['Thyroid'];
    array_push($name_array, $Thyroid);

    $Scalenus_M = $_POST['Scalenus_M'];
    array_push($name_array, $Scalenus_M);

    $Scalenus_a_M = $_POST['Scalenus_a_M'];
    array_push($name_array, $Scalenus_a_M);

    $Scalenus_m_M = $_POST['Scalenus_m_M'];
    array_push($name_array, $Scalenus_m_M);

    $Scalenus_p_M = $_POST['Scalenus_p_M'];
    array_push($name_array, $Scalenus_p_M);

    $Muscles = $_POST['Muscles'];
    array_push($name_array, $Muscles);

    $Scleido_M = $_POST['Scleido_M'];
    array_push($name_array, $Scleido_M);

    $Sternohyoid_M = $_POST['Sternohyoid_M'];
    array_push($name_array, $Sternohyoid_M);

    $Trachea = $_POST['Trachea'];
    array_push($name_array, $Trachea);

    $Bronchus = $_POST['Bronchus'];
    array_push($name_array, $Bronchus);

    $Bronchus_L = $_POST['Bronchus_L'];
    array_push($name_array, $Bronchus_L);

    $Bronchus_R = $_POST['Bronchus_R'];
    array_push($name_array, $Bronchus_R);

    $Esophagus = $_POST['Esophagus'];
    array_push($name_array, $Esophagus);

    $Lung = $_POST['Lung'];
    array_push($name_array, $Lung);

    $Lung_L = $_POST['Lung_L'];
    array_push($name_array, $Lung_L);

    $Lung_R = $_POST['Lung_R'];
    array_push($name_array, $Lung_R);

    $Heart = $_POST['Heart'];
    array_push($name_array, $Heart);

    $Atrium_L = $_POST['Atrium_L'];
    array_push($name_array, $Atrium_L);

    $Atrium_R = $_POST['Atrium_R'];
    array_push($name_array, $Atrium_R);

    $Ventricle_L = $_POST['Ventricle_L'];
    array_push($name_array, $Ventricle_L);

    $Ventricle_R = $_POST['Ventricle_R'];
    array_push($name_array, $Ventricle_R);

    $Breast = $_POST['Breast'];
    array_push($name_array, $Breast);

    $Breast_L = $_POST['Breast_L'];
    array_push($name_array, $Breast_L);

    $Breast_R = $_POST['Breast_R'];
    array_push($name_array, $Breast_R);

    $Humerus = $_POST['Humerus'];
    array_push($name_array, $Humerus);

    $Humerus_L = $_POST['Humerus_L'];
    array_push($name_array, $Humerus_L);

    $Humerus_R = $_POST['Humerus_R'];
    array_push($name_array, $Humerus_R);

    $Liver = $_POST['Liver'];
    array_push($name_array, $Liver);

    $GallBladder = $_POST['GallBladder'];
    array_push($name_array, $GallBladder);

    $Spleen = $_POST['Spleen'];
    array_push($name_array, $Spleen);

    $Stomach = $_POST['Stomach'];
    array_push($name_array, $Stomach);

    $Pancreas = $_POST['Pancreas'];
    array_push($name_array, $Pancreas);

    $AdrenalLand = $_POST['AdrenalLand'];
    array_push($name_array, $AdrenalLand);

    $AdrenalLand_L = $_POST['AdrenalLand_L'];
    array_push($name_array, $AdrenalLand_L);

    $AdrenalLand_R = $_POST['AdrenalLand_R'];
    array_push($name_array, $AdrenalLand_R);

    $Kidney = $_POST['Kidney'];
    array_push($name_array, $Kidney);

    $Kidney_L = $_POST['Kidney_L'];
    array_push($name_array, $Kidney_L);

    $Kidney_R = $_POST['Kidney_R'];
    array_push($name_array, $Kidney_R);

    $SmallIntestine = $_POST['SmallIntestine'];
    array_push($name_array, $SmallIntestine);

    $Duodenum = $_POST['Duodenum'];
    array_push($name_array, $Duodenum);

    $Ovary = $_POST['Ovary'];
    array_push($name_array, $Ovary);

    $Ovary_L = $_POST['Ovary_L'];
    array_push($name_array, $Ovary_L);

    $Ovary_R = $_POST['Ovary_R'];
    array_push($name_array, $Ovary_R);

    $Uterus = $_POST['Uterus'];
    array_push($name_array, $Uterus);

    $Prostate = $_POST['Prostate'];
    array_push($name_array, $Prostate);

    $Bladder = $_POST['Bladder'];
    array_push($name_array, $Bladder);

    $LargeIntestine = $_POST['LargeIntestine'];
    array_push($name_array, $LargeIntestine);

    $Sigmoid = $_POST['Sigmoid'];
    array_push($name_array, $Sigmoid);

    $Rectum = $_POST['Rectum'];
    array_push($name_array, $Rectum);

    $Urethra = $_POST['Urethra'];
    array_push($name_array, $Urethra);

    $PelvicBone = $_POST['PelvicBone'];
    array_push($name_array, $PelvicBone);

    $FemoralHead_L = $_POST['FemoralHead_L'];
    array_push($name_array, $FemoralHead_L);

    $FemoralHead_R = $_POST['FemoralHead_R'];
    array_push($name_array, $FemoralHead_R);

    $Femur = $_POST['Femur'];
    array_push($name_array, $Femur);

    $Femur_L = $_POST['Femur_L'];
    array_push($name_array, $Femur_L);

    $Femur_R = $_POST['Femur_R'];
    array_push($name_array, $Femur_R);

    $Penis = $_POST['Penis'];
    array_push($name_array, $Penis);

    $Testicles = $_POST['Testicles'];
    array_push($name_array, $Testicles);

    $sql_array = array();
    if($dicom_patient_sex != 'None'){
        array_push($sql_array,"dicom_patient_sex=$dicom_patient_sex");
    }
    if($dicom_hospital_name != 'None'){
        array_push($sql_array,"dicom_hospital_name=$dicom_hospital_name");
    }
    if($dicom_modality != 'None'){
        array_push($sql_array,"dicom_modality=$dicom_modality");
    }
    if($dicom_is_normal != 'None'){
        array_push($sql_array,"dicom_is_normal=$dicom_is_normal");
    }

    foreach ($name_array as $name){
        if ($name != 'None'){
            array_push($sql_array,"$name=True");
        }
    }

    $sql_query = '';
    foreach ($sql_array as $sql_word){
        $sql_query .= $sql_word . ' and ';
    }
    $sql_query = substr($sql_query, 0, -5);
}

?>

<?php
    $dbc = mysqli_connect(
            'localhost', 'root',
            '8888', 'linkingmed_bj');

    $query = "select * from data_db_v1 where " . $sql_query;
    $data = mysqli_query($dbc, $query);
    if(!$data){
        die('Can not read data: ' . mysqli_error($dbc));
    }

    $res_html = '';
    $count = 0;
    while ($row = mysqli_fetch_array($data)){
        $count += 1;
        $res_html .= '<tr>';
        $res_html .= '<th>' . $row['id'] . '</th>';
        $res_html .= '<th>' . $row['dicom_study_uid'] . '</th>';
        $res_html .= '<th>' . $row['dicom_serise_uid'] . '</th>';
        $res_html .= '<th>' . $row['dicom_patient_id'] . '</th>';
        $res_html .= '<th>' . $row['dicom_patient_birth'] . '</th>';
        $res_html .= '<th>' . $row['dicom_patient_sex'] . '</th>';
        $res_html .= '<th>' . $row['dicom_hospital_name'] . '</th>';
        $res_html .= '<th>' . $row['dicom_modality'] . '</th>';
        $res_html .= '<th id="dicom_spacing">' . $row['dicom_spacing'] . '</th>';
        $res_html .= '<th>' . $row['dicom_path'] . '</th>';
        $res_html .= '<th>' . $row['dicom_instance_path'] . '</th>';
        $res_html .= '<th>' . $row['dicom_position'] . '</th>';
        $res_html .= '<th>' . $row['dicom_layers_number'] . '</th>';
        $res_html .= '<th>' . $row['dicom_examine_date'] . '</th>';
        $res_html .= '<th>' . $row['dicom_slice_thickness'] . '</th>';
        $res_html .= '<th>' . $row['dicom_size'] . '</th>';
        $res_html .= '<th>' . $row['dicom_is_normal'] . '</th>';
        $res_html .= '<th>' . $row['dicom_detection_target'] . '</th>';
        $res_html .= '<th>' . $row['dicom_arrive_date'] . '</th>';
        $res_html .= '<th>' . $row['dicom_pathology'] . '</th>';
        $res_html .= '<th>' . $row['rs_instance_uid'] . '</th>';
        $res_html .= '<th>' . $row['rs_create_date'] . '</th>';
        $res_html .= '<th>' . $row['rs_dir'] . '</th>';
        $res_html .= '<th>' . $row['Body'] . '</th>';
        $res_html .= '<th>' . $row['Artery'] . '</th>';
        $res_html .= '<th>' . $row['CCA_L'] . '</th>';
        $res_html .= '<th>' . $row['CCA_R'] . '</th>';
        $res_html .= '<th>' . $row['ICA_L'] . '</th>';
        $res_html .= '<th>' . $row['ECA_L'] . '</th>';
        $res_html .= '<th>' . $row['ICA_R'] . '</th>';
        $res_html .= '<th>' . $row['ECA_R'] . '</th>';
        $res_html .= '<th>' . $row['Vertebral_A_L'] . '</th>';
        $res_html .= '<th>' . $row['Vertebral_A_R'] . '</th>';
        $res_html .= '<th>' . $row['Subclavian_A_L'] . '</th>';
        $res_html .= '<th>' . $row['Subclavian_A_R'] . '</th>';
        $res_html .= '<th>' . $row['IMA_L'] . '</th>';
        $res_html .= '<th>' . $row['IMA_R'] . '</th>';
        $res_html .= '<th>' . $row['Ascendens_A'] . '</th>';
        $res_html .= '<th>' . $row['Arch_A'] . '</th>';
        $res_html .= '<th>' . $row['LAD'] . '</th>';
        $res_html .= '<th>' . $row['Descendens_A'] . '</th>';
        $res_html .= '<th>' . $row['Pulmonary_A'] . '</th>';
        $res_html .= '<th>' . $row['CIA_L'] . '</th>';
        $res_html .= '<th>' . $row['CIA_R'] . '</th>';
        $res_html .= '<th>' . $row['Vein'] . '</th>';
        $res_html .= '<th>' . $row['IJV_L'] . '</th>';
        $res_html .= '<th>' . $row['IJV_R'] . '</th>';
        $res_html .= '<th>' . $row['EJV_R'] . '</th>';
        $res_html .= '<th>' . $row['EJV_L'] . '</th>';
        $res_html .= '<th>' . $row['Subclavian_V_L'] . '</th>';
        $res_html .= '<th>' . $row['Subclavian_V_R'] . '</th>';
        $res_html .= '<th>' . $row['BCV_L'] . '</th>';
        $res_html .= '<th>' . $row['BCV_R'] . '</th>';
        $res_html .= '<th>' . $row['IMV_L'] . '</th>';
        $res_html .= '<th>' . $row['IMV_R'] . '</th>';
        $res_html .= '<th>' . $row['SVC'] . '</th>';
        $res_html .= '<th>' . $row['Pulmonary_V'] . '</th>';
        $res_html .= '<th>' . $row['Azygos_V'] . '</th>';
        $res_html .= '<th>' . $row['IVC'] . '</th>';
        $res_html .= '<th>' . $row['CIV_L'] . '</th>';
        $res_html .= '<th>' . $row['CIV_R'] . '</th>';
        $res_html .= '<th>' . $row['LNM_P'] . '</th>';
        $res_html .= '<th>' . $row['LNM_N'] . '</th>';
        $res_html .= '<th>' . $row['LNM_S'] . '</th>';
        $res_html .= '<th>' . $row['LN'] . '</th>';
        $res_html .= '<th>' . $row['SpinalCord'] . '</th>';
        $res_html .= '<th>' . $row['SpinalCord_C'] . '</th>';
        $res_html .= '<th>' . $row['SpinalCord_T'] . '</th>';
        $res_html .= '<th>' . $row['SpinalCord_L'] . '</th>';
        $res_html .= '<th>' . $row['Vertebra_C'] . '</th>';
        $res_html .= '<th>' . $row['C1'] . '</th>';
        $res_html .= '<th>' . $row['C2'] . '</th>';
        $res_html .= '<th>' . $row['C3'] . '</th>';
        $res_html .= '<th>' . $row['C4'] . '</th>';
        $res_html .= '<th>' . $row['C5'] . '</th>';
        $res_html .= '<th>' . $row['C6'] . '</th>';
        $res_html .= '<th>' . $row['C7'] . '</th>';
        $res_html .= '<th>' . $row['Vertebra_T'] . '</th>';
        $res_html .= '<th>' . $row['T1'] . '</th>';
        $res_html .= '<th>' . $row['T2'] . '</th>';
        $res_html .= '<th>' . $row['T3'] . '</th>';
        $res_html .= '<th>' . $row['T4'] . '</th>';
        $res_html .= '<th>' . $row['T5'] . '</th>';
        $res_html .= '<th>' . $row['T6'] . '</th>';
        $res_html .= '<th>' . $row['T7'] . '</th>';
        $res_html .= '<th>' . $row['T8'] . '</th>';
        $res_html .= '<th>' . $row['T9'] . '</th>';
        $res_html .= '<th>' . $row['T10'] . '</th>';
        $res_html .= '<th>' . $row['T11'] . '</th>';
        $res_html .= '<th>' . $row['T12'] . '</th>';
        $res_html .= '<th>' . $row['Vertebra_L'] . '</th>';
        $res_html .= '<th>' . $row['L1'] . '</th>';
        $res_html .= '<th>' . $row['L2'] . '</th>';
        $res_html .= '<th>' . $row['L3'] . '</th>';
        $res_html .= '<th>' . $row['L4'] . '</th>';
        $res_html .= '<th>' . $row['L5'] . '</th>';
        $res_html .= '<th>' . $row['FullBrain'] . '</th>';
        $res_html .= '<th>' . $row['Brain'] . '</th>';
        $res_html .= '<th>' . $row['Cerebellum'] . '</th>';
        $res_html .= '<th>' . $row['FrontalLobe'] . '</th>';
        $res_html .= '<th>' . $row['ParietalLobe'] . '</th>';
        $res_html .= '<th>' . $row['TemporalLobe_L'] . '</th>';
        $res_html .= '<th>' . $row['TemporalLobe_R'] . '</th>';
        $res_html .= '<th>' . $row['OccipitalLobe'] . '</th>';
        $res_html .= '<th>' . $row['BrainStem'] . '</th>';
        $res_html .= '<th>' . $row['Eyes'] . '</th>';
        $res_html .= '<th>' . $row['Eye_L'] . '</th>';
        $res_html .= '<th>' . $row['Eye_R'] . '</th>';
        $res_html .= '<th>' . $row['Lens_L'] . '</th>';
        $res_html .= '<th>' . $row['Lens_R'] . '</th>';
        $res_html .= '<th>' . $row['OpticNerve'] . '</th>';
        $res_html .= '<th>' . $row['OpticNerve_L'] . '</th>';
        $res_html .= '<th>' . $row['OpticNerve_R'] . '</th>';
        $res_html .= '<th>' . $row['OpticChiasm'] . '</th>';
        $res_html .= '<th>' . $row['Pituitary'] . '</th>';
        $res_html .= '<th>' . $row['Cochlea'] . '</th>';
        $res_html .= '<th>' . $row['Cochlea_L'] . '</th>';
        $res_html .= '<th>' . $row['Cochlea_R'] . '</th>';
        $res_html .= '<th>' . $row['Laryngopharynx'] . '</th>';
        $res_html .= '<th>' . $row['Oropharynx'] . '</th>';
        $res_html .= '<th>' . $row['Larynx'] . '</th>';
        $res_html .= '<th>' . $row['Mandible'] . '</th>';
        $res_html .= '<th>' . $row['TMJ_L'] . '</th>';
        $res_html .= '<th>' . $row['TMJ_R'] . '</th>';
        $res_html .= '<th>' . $row['Mandible_L'] . '</th>';
        $res_html .= '<th>' . $row['Mandible_R'] . '</th>';
        $res_html .= '<th>' . $row['Parotid'] . '</th>';
        $res_html .= '<th>' . $row['Parotid_L'] . '</th>';
        $res_html .= '<th>' . $row['Parotid_R'] . '</th>';
        $res_html .= '<th>' . $row['Thyroid'] . '</th>';
        $res_html .= '<th>' . $row['Scalenus_M'] . '</th>';
        $res_html .= '<th>' . $row['Scalenus_a_M'] . '</th>';
        $res_html .= '<th>' . $row['Scalenus_m_M'] . '</th>';
        $res_html .= '<th>' . $row['Scalenus_p_M'] . '</th>';
        $res_html .= '<th>' . $row['Muscles'] . '</th>';
        $res_html .= '<th>' . $row['Scleido_M'] . '</th>';
        $res_html .= '<th>' . $row['Sternohyoid_M'] . '</th>';
        $res_html .= '<th>' . $row['Trachea'] . '</th>';
        $res_html .= '<th>' . $row['Bronchus'] . '</th>';
        $res_html .= '<th>' . $row['Bronchus_L'] . '</th>';
        $res_html .= '<th>' . $row['Bronchus_R'] . '</th>';
        $res_html .= '<th>' . $row['Esophagus'] . '</th>';
        $res_html .= '<th>' . $row['Lung'] . '</th>';
        $res_html .= '<th>' . $row['Lung_L'] . '</th>';
        $res_html .= '<th>' . $row['Lung_R'] . '</th>';
        $res_html .= '<th>' . $row['Heart'] . '</th>';
        $res_html .= '<th>' . $row['Atrium_L'] . '</th>';
        $res_html .= '<th>' . $row['Atrium_R'] . '</th>';
        $res_html .= '<th>' . $row['Ventricle_L'] . '</th>';
        $res_html .= '<th>' . $row['Ventricle_R'] . '</th>';
        $res_html .= '<th>' . $row['Breast'] . '</th>';
        $res_html .= '<th>' . $row['Breast_L'] . '</th>';
        $res_html .= '<th>' . $row['Breast_R'] . '</th>';
        $res_html .= '<th>' . $row['Humerus'] . '</th>';
        $res_html .= '<th>' . $row['Humerus_L'] . '</th>';
        $res_html .= '<th>' . $row['Humerus_R'] . '</th>';
        $res_html .= '<th>' . $row['Liver'] . '</th>';
        $res_html .= '<th>' . $row['GallBladder'] . '</th>';
        $res_html .= '<th>' . $row['Spleen'] . '</th>';
        $res_html .= '<th>' . $row['Stomach'] . '</th>';
        $res_html .= '<th>' . $row['Pancreas'] . '</th>';
        $res_html .= '<th>' . $row['AdrenalLand'] . '</th>';
        $res_html .= '<th>' . $row['AdrenalLand_L'] . '</th>';
        $res_html .= '<th>' . $row['AdrenalLand_R'] . '</th>';
        $res_html .= '<th>' . $row['Kidney'] . '</th>';
        $res_html .= '<th>' . $row['Kidney_L'] . '</th>';
        $res_html .= '<th>' . $row['Kidney_R'] . '</th>';
        $res_html .= '<th>' . $row['SmallIntestine'] . '</th>';
        $res_html .= '<th>' . $row['Duodenum'] . '</th>';
        $res_html .= '<th>' . $row['Ovary'] . '</th>';
        $res_html .= '<th>' . $row['Ovary_L'] . '</th>';
        $res_html .= '<th>' . $row['Ovary_R'] . '</th>';
        $res_html .= '<th>' . $row['Uterus'] . '</th>';
        $res_html .= '<th>' . $row['Prostate'] . '</th>';
        $res_html .= '<th>' . $row['Bladder'] . '</th>';
        $res_html .= '<th>' . $row['LargeIntestine'] . '</th>';
        $res_html .= '<th>' . $row['Sigmoid'] . '</th>';
        $res_html .= '<th>' . $row['Rectum'] . '</th>';
        $res_html .= '<th>' . $row['Urethra'] . '</th>';
        $res_html .= '<th>' . $row['PelvicBone'] . '</th>';
        $res_html .= '<th>' . $row['FemoralHead_L'] . '</th>';
        $res_html .= '<th>' . $row['FemoralHead_R'] . '</th>';
        $res_html .= '<th>' . $row['Femur'] . '</th>';
        $res_html .= '<th>' . $row['Femur_L'] . '</th>';
        $res_html .= '<th>' . $row['Femur_R'] . '</th>';
        $res_html .= '<th>' . $row['Penis'] . '</th>';
        $res_html .= '<th>' . $row['Testicles'] . '</th>';
        $res_html .= '</tr>';
    }

mysqli_free_result($data);
mysqli_close($dbc);
?>

<?php
echo "<h1>Total $count instances</h1>"
?>

<div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>dicom_study_uid</th>
            <th>dicom_serise_uid</th>
            <th>dicom_patient_id</th>
            <th>dicom_patient_birth</th>
            <th>dicom_patient_sex</th>
            <th>dicom_hospital_name</th>
            <th>dicom_modality</th>
            <th>dicom_spacing</th>
            <th>dicom_path</th>
            <th>dicom_instance_path</th>
            <th>dicom_position</th>
            <th>dicom_layers_number</th>
            <th>dicom_examine_date</th>
            <th>dicom_slice_thickness</th>
            <th>dicom_size</th>
            <th>dicom_is_normal</th>
            <th>dicom_detection_target</th>
            <th>dicom_arrive_date</th>
            <th>dicom_pathology</th>
            <th>rs_instance_uid</th>
            <th>rs_create_date</th>
            <th>rs_dir</th>
            <th>Body</th>
            <th>Artery</th>
            <th>CCA_L</th>
            <th>CCA_R</th>
            <th>ICA_L</th>
            <th>ECA_L</th>
            <th>ICA_R</th>
            <th>ECA_R</th>
            <th>Vertebral_A_L</th>
            <th>Vertebral_A_R</th>
            <th>Subclavian_A_L</th>
            <th>Subclavian_A_R</th>
            <th>IMA_L</th>
            <th>IMA_R</th>
            <th>Ascendens_A</th>
            <th>Arch_A</th>
            <th>LAD</th>
            <th>Descendens_A</th>
            <th>Pulmonary_A</th>
            <th>CIA_L</th>
            <th>CIA_R</th>
            <th>Vein</th>
            <th>IJV_L</th>
            <th>IJV_R</th>
            <th>EJV_R</th>
            <th>EJV_L</th>
            <th>Subclavian_V_L</th>
            <th>Subclavian_V_R</th>
            <th>BCV_L</th>
            <th>BCV_R</th>
            <th>IMV_L</th>
            <th>IMV_R</th>
            <th>SVC</th>
            <th>Pulmonary_V</th>
            <th>Azygos_V</th>
            <th>IVC</th>
            <th>CIV_L</th>
            <th>CIV_R</th>
            <th>LNM_P</th>
            <th>LNM_N</th>
            <th>LNM_S</th>
            <th>LN</th>
            <th>SpinalCord</th>
            <th>SpinalCord_C</th>
            <th>SpinalCord_T</th>
            <th>SpinalCord_L</th>
            <th>Vertebra_C</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
            <th>C6</th>
            <th>C7</th>
            <th>Vertebra_T</th>
            <th>T1</th>
            <th>T2</th>
            <th>T3</th>
            <th>T4</th>
            <th>T5</th>
            <th>T6</th>
            <th>T7</th>
            <th>T8</th>
            <th>T9</th>
            <th>T10</th>
            <th>T11</th>
            <th>T12</th>
            <th>Vertebra_L</th>
            <th>L1</th>
            <th>L2</th>
            <th>L3</th>
            <th>L4</th>
            <th>L5</th>
            <th>FullBrain</th>
            <th>Brain</th>
            <th>Cerebellum</th>
            <th>FrontalLobe</th>
            <th>ParietalLobe</th>
            <th>TemporalLobe_L</th>
            <th>TemporalLobe_R</th>
            <th>OccipitalLobe</th>
            <th>BrainStem</th>
            <th>Eyes</th>
            <th>Eye_L</th>
            <th>Eye_R</th>
            <th>Lens_L</th>
            <th>Lens_R</th>
            <th>OpticNerve</th>
            <th>OpticNerve_L</th>
            <th>OpticNerve_R</th>
            <th>OpticChiasm</th>
            <th>Pituitary</th>
            <th>Cochlea</th>
            <th>Cochlea_L</th>
            <th>Cochlea_R</th>
            <th>Laryngopharynx</th>
            <th>Oropharynx</th>
            <th>Larynx</th>
            <th>Mandible</th>
            <th>TMJ_L</th>
            <th>TMJ_R</th>
            <th>Mandible_L</th>
            <th>Mandible_R</th>
            <th>Parotid</th>
            <th>Parotid_L</th>
            <th>Parotid_R</th>
            <th>Thyroid</th>
            <th>Scalenus_M</th>
            <th>Scalenus_a_M</th>
            <th>Scalenus_m_M</th>
            <th>Scalenus_p_M</th>
            <th>Muscles</th>
            <th>Scleido_M</th>
            <th>Sternohyoid_M</th>
            <th>Trachea</th>
            <th>Bronchus</th>
            <th>Bronchus_L</th>
            <th>Bronchus_R</th>
            <th>Esophagus</th>
            <th>Lung</th>
            <th>Lung_L</th>
            <th>Lung_R</th>
            <th>Heart</th>
            <th>Atrium_L</th>
            <th>Atrium_R</th>
            <th>Ventricle_L</th>
            <th>Ventricle_R</th>
            <th>Breast</th>
            <th>Breast_L</th>
            <th>Breast_R</th>
            <th>Humerus</th>
            <th>Humerus_L</th>
            <th>Humerus_R</th>
            <th>Liver</th>
            <th>GallBladder</th>
            <th>Spleen</th>
            <th>Stomach</th>
            <th>Pancreas</th>
            <th>AdrenalLand</th>
            <th>AdrenalLand_L</th>
            <th>AdrenalLand_R</th>
            <th>Kidney</th>
            <th>Kidney_L</th>
            <th>Kidney_R</th>
            <th>SmallIntestine</th>
            <th>Duodenum</th>
            <th>Ovary</th>
            <th>Ovary_L</th>
            <th>Ovary_R</th>
            <th>Uterus</th>
            <th>Prostate</th>
            <th>Bladder</th>
            <th>LargeIntestine</th>
            <th>Sigmoid</th>
            <th>Rectum</th>
            <th>Urethra</th>
            <th>PelvicBone</th>
            <th>FemoralHead_L</th>
            <th>FemoralHead_R</th>
            <th>Femur</th>
            <th>Femur_L</th>
            <th>Femur_R</th>
            <th>Penis</th>
            <th>Testicles</th>
        </tr>
        <?php

        echo $res_html;

        ?>
        <table>
</div>




</body>
</html>