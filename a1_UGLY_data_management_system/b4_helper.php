<?php
/**
 * Created by PhpStorm.
 * User: freshield
 * Date: 18-9-28
 * Time: 下午5:36
 */

function get_sql_query_from_post($post){
    if (isset($post['submit'])) {
        $dicom_patient_sex = $post['dicom_patient_sex'];
        $dicom_hospital_name = $post['dicom_hospital_name'];
        $dicom_modality = $post['dicom_modality'];
        $dicom_is_normal = $post['dicom_is_normal'];

        $name_array = array();
        $Body = $post['Body'];
        array_push($name_array, $Body);

        $Artery = $post['Artery'];
        array_push($name_array, $Artery);

        $CCA_L = $post['CCA_L'];
        array_push($name_array, $CCA_L);

        $CCA_R = $post['CCA_R'];
        array_push($name_array, $CCA_R);

        $ICA_L = $post['ICA_L'];
        array_push($name_array, $ICA_L);

        $ECA_L = $post['ECA_L'];
        array_push($name_array, $ECA_L);

        $ICA_R = $post['ICA_R'];
        array_push($name_array, $ICA_R);

        $ECA_R = $post['ECA_R'];
        array_push($name_array, $ECA_R);

        $Vertebral_A_L = $post['Vertebral_A_L'];
        array_push($name_array, $Vertebral_A_L);

        $Vertebral_A_R = $post['Vertebral_A_R'];
        array_push($name_array, $Vertebral_A_R);

        $Subclavian_A_L = $post['Subclavian_A_L'];
        array_push($name_array, $Subclavian_A_L);

        $Subclavian_A_R = $post['Subclavian_A_R'];
        array_push($name_array, $Subclavian_A_R);

        $IMA_L = $post['IMA_L'];
        array_push($name_array, $IMA_L);

        $IMA_R = $post['IMA_R'];
        array_push($name_array, $IMA_R);

        $Ascendens_A = $post['Ascendens_A'];
        array_push($name_array, $Ascendens_A);

        $Arch_A = $post['Arch_A'];
        array_push($name_array, $Arch_A);

        $LAD = $post['LAD'];
        array_push($name_array, $LAD);

        $Descendens_A = $post['Descendens_A'];
        array_push($name_array, $Descendens_A);

        $Pulmonary_A = $post['Pulmonary_A'];
        array_push($name_array, $Pulmonary_A);

        $CIA_L = $post['CIA_L'];
        array_push($name_array, $CIA_L);

        $CIA_R = $post['CIA_R'];
        array_push($name_array, $CIA_R);

        $Vein = $post['Vein'];
        array_push($name_array, $Vein);

        $IJV_L = $post['IJV_L'];
        array_push($name_array, $IJV_L);

        $IJV_R = $post['IJV_R'];
        array_push($name_array, $IJV_R);

        $EJV_R = $post['EJV_R'];
        array_push($name_array, $EJV_R);

        $EJV_L = $post['EJV_L'];
        array_push($name_array, $EJV_L);

        $Subclavian_V_L = $post['Subclavian_V_L'];
        array_push($name_array, $Subclavian_V_L);

        $Subclavian_V_R = $post['Subclavian_V_R'];
        array_push($name_array, $Subclavian_V_R);

        $BCV_L = $post['BCV_L'];
        array_push($name_array, $BCV_L);

        $BCV_R = $post['BCV_R'];
        array_push($name_array, $BCV_R);

        $IMV_L = $post['IMV_L'];
        array_push($name_array, $IMV_L);

        $IMV_R = $post['IMV_R'];
        array_push($name_array, $IMV_R);

        $SVC = $post['SVC'];
        array_push($name_array, $SVC);

        $Pulmonary_V = $post['Pulmonary_V'];
        array_push($name_array, $Pulmonary_V);

        $Azygos_V = $post['Azygos_V'];
        array_push($name_array, $Azygos_V);

        $IVC = $post['IVC'];
        array_push($name_array, $IVC);

        $CIV_L = $post['CIV_L'];
        array_push($name_array, $CIV_L);

        $CIV_R = $post['CIV_R'];
        array_push($name_array, $CIV_R);

        $LNM_P = $post['LNM_P'];
        array_push($name_array, $LNM_P);

        $LNM_N = $post['LNM_N'];
        array_push($name_array, $LNM_N);

        $LNM_S = $post['LNM_S'];
        array_push($name_array, $LNM_S);

        $LN = $post['LN'];
        array_push($name_array, $LN);

        $SpinalCord = $post['SpinalCord'];
        array_push($name_array, $SpinalCord);

        $SpinalCord_C = $post['SpinalCord_C'];
        array_push($name_array, $SpinalCord_C);

        $SpinalCord_T = $post['SpinalCord_T'];
        array_push($name_array, $SpinalCord_T);

        $SpinalCord_L = $post['SpinalCord_L'];
        array_push($name_array, $SpinalCord_L);

        $Vertebra_C = $post['Vertebra_C'];
        array_push($name_array, $Vertebra_C);

        $C1 = $post['C1'];
        array_push($name_array, $C1);

        $C2 = $post['C2'];
        array_push($name_array, $C2);

        $C3 = $post['C3'];
        array_push($name_array, $C3);

        $C4 = $post['C4'];
        array_push($name_array, $C4);

        $C5 = $post['C5'];
        array_push($name_array, $C5);

        $C6 = $post['C6'];
        array_push($name_array, $C6);

        $C7 = $post['C7'];
        array_push($name_array, $C7);

        $Vertebra_T = $post['Vertebra_T'];
        array_push($name_array, $Vertebra_T);

        $T1 = $post['T1'];
        array_push($name_array, $T1);

        $T2 = $post['T2'];
        array_push($name_array, $T2);

        $T3 = $post['T3'];
        array_push($name_array, $T3);

        $T4 = $post['T4'];
        array_push($name_array, $T4);

        $T5 = $post['T5'];
        array_push($name_array, $T5);

        $T6 = $post['T6'];
        array_push($name_array, $T6);

        $T7 = $post['T7'];
        array_push($name_array, $T7);

        $T8 = $post['T8'];
        array_push($name_array, $T8);

        $T9 = $post['T9'];
        array_push($name_array, $T9);

        $T10 = $post['T10'];
        array_push($name_array, $T10);

        $T11 = $post['T11'];
        array_push($name_array, $T11);

        $T12 = $post['T12'];
        array_push($name_array, $T12);

        $Vertebra_L = $post['Vertebra_L'];
        array_push($name_array, $Vertebra_L);

        $L1 = $post['L1'];
        array_push($name_array, $L1);

        $L2 = $post['L2'];
        array_push($name_array, $L2);

        $L3 = $post['L3'];
        array_push($name_array, $L3);

        $L4 = $post['L4'];
        array_push($name_array, $L4);

        $L5 = $post['L5'];
        array_push($name_array, $L5);

        $FullBrain = $post['FullBrain'];
        array_push($name_array, $FullBrain);

        $Brain = $post['Brain'];
        array_push($name_array, $Brain);

        $Cerebellum = $post['Cerebellum'];
        array_push($name_array, $Cerebellum);

        $FrontalLobe = $post['FrontalLobe'];
        array_push($name_array, $FrontalLobe);

        $ParietalLobe = $post['ParietalLobe'];
        array_push($name_array, $ParietalLobe);

        $TemporalLobe_L = $post['TemporalLobe_L'];
        array_push($name_array, $TemporalLobe_L);

        $TemporalLobe_R = $post['TemporalLobe_R'];
        array_push($name_array, $TemporalLobe_R);

        $OccipitalLobe = $post['OccipitalLobe'];
        array_push($name_array, $OccipitalLobe);

        $BrainStem = $post['BrainStem'];
        array_push($name_array, $BrainStem);

        $Eyes = $post['Eyes'];
        array_push($name_array, $Eyes);

        $Eye_L = $post['Eye_L'];
        array_push($name_array, $Eye_L);

        $Eye_R = $post['Eye_R'];
        array_push($name_array, $Eye_R);

        $Lens_L = $post['Lens_L'];
        array_push($name_array, $Lens_L);

        $Lens_R = $post['Lens_R'];
        array_push($name_array, $Lens_R);

        $OpticNerve = $post['OpticNerve'];
        array_push($name_array, $OpticNerve);

        $OpticNerve_L = $post['OpticNerve_L'];
        array_push($name_array, $OpticNerve_L);

        $OpticNerve_R = $post['OpticNerve_R'];
        array_push($name_array, $OpticNerve_R);

        $OpticChiasm = $post['OpticChiasm'];
        array_push($name_array, $OpticChiasm);

        $Pituitary = $post['Pituitary'];
        array_push($name_array, $Pituitary);

        $Cochlea = $post['Cochlea'];
        array_push($name_array, $Cochlea);

        $Cochlea_L = $post['Cochlea_L'];
        array_push($name_array, $Cochlea_L);

        $Cochlea_R = $post['Cochlea_R'];
        array_push($name_array, $Cochlea_R);

        $Laryngopharynx = $post['Laryngopharynx'];
        array_push($name_array, $Laryngopharynx);

        $Oropharynx = $post['Oropharynx'];
        array_push($name_array, $Oropharynx);

        $Larynx = $post['Larynx'];
        array_push($name_array, $Larynx);

        $Mandible = $post['Mandible'];
        array_push($name_array, $Mandible);

        $TMJ_L = $post['TMJ_L'];
        array_push($name_array, $TMJ_L);

        $TMJ_R = $post['TMJ_R'];
        array_push($name_array, $TMJ_R);

        $Mandible_L = $post['Mandible_L'];
        array_push($name_array, $Mandible_L);

        $Mandible_R = $post['Mandible_R'];
        array_push($name_array, $Mandible_R);

        $Parotid = $post['Parotid'];
        array_push($name_array, $Parotid);

        $Parotid_L = $post['Parotid_L'];
        array_push($name_array, $Parotid_L);

        $Parotid_R = $post['Parotid_R'];
        array_push($name_array, $Parotid_R);

        $Thyroid = $post['Thyroid'];
        array_push($name_array, $Thyroid);

        $Scalenus_M = $post['Scalenus_M'];
        array_push($name_array, $Scalenus_M);

        $Scalenus_a_M = $post['Scalenus_a_M'];
        array_push($name_array, $Scalenus_a_M);

        $Scalenus_m_M = $post['Scalenus_m_M'];
        array_push($name_array, $Scalenus_m_M);

        $Scalenus_p_M = $post['Scalenus_p_M'];
        array_push($name_array, $Scalenus_p_M);

        $Muscles = $post['Muscles'];
        array_push($name_array, $Muscles);

        $Scleido_M = $post['Scleido_M'];
        array_push($name_array, $Scleido_M);

        $Sternohyoid_M = $post['Sternohyoid_M'];
        array_push($name_array, $Sternohyoid_M);

        $Trachea = $post['Trachea'];
        array_push($name_array, $Trachea);

        $Bronchus = $post['Bronchus'];
        array_push($name_array, $Bronchus);

        $Bronchus_L = $post['Bronchus_L'];
        array_push($name_array, $Bronchus_L);

        $Bronchus_R = $post['Bronchus_R'];
        array_push($name_array, $Bronchus_R);

        $Esophagus = $post['Esophagus'];
        array_push($name_array, $Esophagus);

        $Lung = $post['Lung'];
        array_push($name_array, $Lung);

        $Lung_L = $post['Lung_L'];
        array_push($name_array, $Lung_L);

        $Lung_R = $post['Lung_R'];
        array_push($name_array, $Lung_R);

        $Heart = $post['Heart'];
        array_push($name_array, $Heart);

        $Atrium_L = $post['Atrium_L'];
        array_push($name_array, $Atrium_L);

        $Atrium_R = $post['Atrium_R'];
        array_push($name_array, $Atrium_R);

        $Ventricle_L = $post['Ventricle_L'];
        array_push($name_array, $Ventricle_L);

        $Ventricle_R = $post['Ventricle_R'];
        array_push($name_array, $Ventricle_R);

        $Breast = $post['Breast'];
        array_push($name_array, $Breast);

        $Breast_L = $post['Breast_L'];
        array_push($name_array, $Breast_L);

        $Breast_R = $post['Breast_R'];
        array_push($name_array, $Breast_R);

        $Humerus = $post['Humerus'];
        array_push($name_array, $Humerus);

        $Humerus_L = $post['Humerus_L'];
        array_push($name_array, $Humerus_L);

        $Humerus_R = $post['Humerus_R'];
        array_push($name_array, $Humerus_R);

        $Liver = $post['Liver'];
        array_push($name_array, $Liver);

        $GallBladder = $post['GallBladder'];
        array_push($name_array, $GallBladder);

        $Spleen = $post['Spleen'];
        array_push($name_array, $Spleen);

        $Stomach = $post['Stomach'];
        array_push($name_array, $Stomach);

        $Pancreas = $post['Pancreas'];
        array_push($name_array, $Pancreas);

        $AdrenalLand = $post['AdrenalLand'];
        array_push($name_array, $AdrenalLand);

        $AdrenalLand_L = $post['AdrenalLand_L'];
        array_push($name_array, $AdrenalLand_L);

        $AdrenalLand_R = $post['AdrenalLand_R'];
        array_push($name_array, $AdrenalLand_R);

        $Kidney = $post['Kidney'];
        array_push($name_array, $Kidney);

        $Kidney_L = $post['Kidney_L'];
        array_push($name_array, $Kidney_L);

        $Kidney_R = $post['Kidney_R'];
        array_push($name_array, $Kidney_R);

        $SmallIntestine = $post['SmallIntestine'];
        array_push($name_array, $SmallIntestine);

        $Duodenum = $post['Duodenum'];
        array_push($name_array, $Duodenum);

        $Ovary = $post['Ovary'];
        array_push($name_array, $Ovary);

        $Ovary_L = $post['Ovary_L'];
        array_push($name_array, $Ovary_L);

        $Ovary_R = $post['Ovary_R'];
        array_push($name_array, $Ovary_R);

        $Uterus = $post['Uterus'];
        array_push($name_array, $Uterus);

        $Prostate = $post['Prostate'];
        array_push($name_array, $Prostate);

        $Bladder = $post['Bladder'];
        array_push($name_array, $Bladder);

        $LargeIntestine = $post['LargeIntestine'];
        array_push($name_array, $LargeIntestine);

        $Sigmoid = $post['Sigmoid'];
        array_push($name_array, $Sigmoid);

        $Rectum = $post['Rectum'];
        array_push($name_array, $Rectum);

        $Urethra = $post['Urethra'];
        array_push($name_array, $Urethra);

        $PelvicBone = $post['PelvicBone'];
        array_push($name_array, $PelvicBone);

        $FemoralHead_L = $post['FemoralHead_L'];
        array_push($name_array, $FemoralHead_L);

        $FemoralHead_R = $post['FemoralHead_R'];
        array_push($name_array, $FemoralHead_R);

        $Femur = $post['Femur'];
        array_push($name_array, $Femur);

        $Femur_L = $post['Femur_L'];
        array_push($name_array, $Femur_L);

        $Femur_R = $post['Femur_R'];
        array_push($name_array, $Femur_R);

        $Penis = $post['Penis'];
        array_push($name_array, $Penis);

        $Testicles = $post['Testicles'];
        array_push($name_array, $Testicles);

        $sql_array = array();
        if ($dicom_patient_sex != 'None') {
            array_push($sql_array, "dicom_patient_sex=$dicom_patient_sex");
        }
        if ($dicom_hospital_name != 'None') {
            array_push($sql_array, "dicom_hospital_name=$dicom_hospital_name");
        }
        if ($dicom_modality != 'None') {
            array_push($sql_array, "dicom_modality=$dicom_modality");
        }
        if ($dicom_is_normal != 'None') {
            array_push($sql_array, "dicom_is_normal=$dicom_is_normal");
        }

        foreach ($name_array as $name) {
            if ($name != 'None') {
                array_push($sql_array, "$name=True");
            }
        }

        $sql_query = '';
        foreach ($sql_array as $sql_word) {
            $sql_query .= $sql_word . ' and ';
        }
        $sql_query = substr($sql_query, 0, -5);
        return $sql_query;
    }
    return '';
}

function get_table_html_from_row($row){
    $res_html = '';
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

    return $res_html;
}

function get_save_place(){
    $python_file = 'b5_get_place.py';
    $output = shell_exec("python $python_file");

    $rst_array = array();
    $array = explode(',', $output);
    foreach ($array as $value) {
        if($value != ''){
            $value = str_replace(PHP_EOL, '', $value);
            array_push($rst_array,$value);
        }
    }
    return $rst_array;
}

?>