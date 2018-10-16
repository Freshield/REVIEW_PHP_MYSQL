<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST select</title>
    <link rel="stylesheet" type="text/css" href="select_style.css" />
</head>
<body>
<h1 id="header">CRYING UGLY DATA MANAGEMENT SYSTEM</h1>
<h2>查询结果</h2>

<?php
    include 'helper.php';
    $dbc = mysqli_connect(
            'localhost', 'root',
            '8888', 'linkingmed_bj');

    $sql_query = get_sql_query_from_post($_POST);
    $query = "select * from data_db_v1 where " . $sql_query;
    $data = mysqli_query($dbc, $query);
    if(!$data){
        die('Can not read data: ' . mysqli_error($dbc));
    }

    $res_html = '';
    $count = 0;
    while ($row = mysqli_fetch_array($data)){
        $count += 1;
        $temp_html = get_table_html_from_row($row);
        $res_html .= $temp_html;
    }

    mysqli_free_result($data);
    mysqli_close($dbc);
?>

<?php
echo "<h3>一共 $count 例数据</h3>"
?>

<div id="dicom_table">
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
            <th>AdrenalLand</th>
            <th>AdrenalLand_L</th>
            <th>AdrenalLand_R</th>
            <th>Arch_A</th>
            <th>Artery</th>
            <th>Ascendens_A</th>
            <th>Atrium_L</th>
            <th>Atrium_R</th>
            <th>Azygos_V</th>
            <th>BCV</th>
            <th>BCV_L</th>
            <th>BCV_R</th>
            <th>Bladder</th>
            <th>Body</th>
            <th>BowelBag</th>
            <th>Brain</th>
            <th>BrainStem</th>
            <th>Breast</th>
            <th>Breast_L</th>
            <th>Breast_R</th>
            <th>Bronchus</th>
            <th>Bronchus_L</th>
            <th>Bronchus_R</th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
            <th>C6</th>
            <th>C7</th>
            <th>CCA</th>
            <th>CCA_L</th>
            <th>CCA_R</th>
            <th>CIA</th>
            <th>CIA_L</th>
            <th>CIA_R</th>
            <th>CIV</th>
            <th>CIV_L</th>
            <th>CIV_R</th>
            <th>Cerebellum</th>
            <th>Cochlea</th>
            <th>Cochlea_L</th>
            <th>Cochlea_R</th>
            <th>Descendens_A</th>
            <th>Duodenum</th>
            <th>ECA</th>
            <th>ECA_L</th>
            <th>ECA_R</th>
            <th>EJV</th>
            <th>EJV_L</th>
            <th>EJV_R</th>
            <th>Esophagus</th>
            <th>Eye_L</th>
            <th>Eye_R</th>
            <th>Eyes</th>
            <th>FemoralHead</th>
            <th>FemoralHead_L</th>
            <th>FemoralHead_R</th>
            <th>Femur</th>
            <th>Femur_L</th>
            <th>Femur_R</th>
            <th>FrontalLobe</th>
            <th>FullBrain</th>
            <th>GallBladder</th>
            <th>Heart</th>
            <th>Humerus</th>
            <th>Humerus_L</th>
            <th>Humerus_R</th>
            <th>ICA</th>
            <th>ICA_L</th>
            <th>ICA_R</th>
            <th>IJV</th>
            <th>IJV_L</th>
            <th>IJV_R</th>
            <th>IMA_L</th>
            <th>IMA_R</th>
            <th>IMV</th>
            <th>IMV_L</th>
            <th>IMV_R</th>
            <th>IVC</th>
            <th>Kidney</th>
            <th>Kidney_L</th>
            <th>Kidney_R</th>
            <th>L1</th>
            <th>L2</th>
            <th>L3</th>
            <th>L4</th>
            <th>L5</th>
            <th>LAD</th>
            <th>LN</th>
            <th>LNM_N</th>
            <th>LNM_P</th>
            <th>LNM_S</th>
            <th>LargeIntestine</th>
            <th>Laryngopharynx</th>
            <th>Larynx</th>
            <th>Lens</th>
            <th>Lens_L</th>
            <th>Lens_R</th>
            <th>Liver</th>
            <th>Lung</th>
            <th>Lung_L</th>
            <th>Lung_R</th>
            <th>Mandible</th>
            <th>Mandible_L</th>
            <th>Mandible_R</th>
            <th>Muscles</th>
            <th>OccipitalLobe</th>
            <th>OpticChiasm</th>
            <th>OpticNerve</th>
            <th>OpticNerve_L</th>
            <th>OpticNerve_R</th>
            <th>Oral</th>
            <th>Oropharynx</th>
            <th>Ovary</th>
            <th>Ovary_L</th>
            <th>Ovary_R</th>
            <th>Pancreas</th>
            <th>ParietalLobe</th>
            <th>Parotid</th>
            <th>Parotid_L</th>
            <th>Parotid_R</th>
            <th>PelvicBone</th>
            <th>Penis</th>
            <th>Pituitary</th>
            <th>Prostate</th>
            <th>Pulmonary_A</th>
            <th>Pulmonary_V</th>
            <th>Rectum</th>
            <th>SMG</th>
            <th>SMG_L</th>
            <th>SMG_R</th>
            <th>SVC</th>
            <th>Scalenus_M</th>
            <th>Scalenus_a_M</th>
            <th>Scalenus_m_M</th>
            <th>Scalenus_p_M</th>
            <th>Scleido_M</th>
            <th>Sigmoid</th>
            <th>SmallIntestine</th>
            <th>SpinalCord</th>
            <th>SpinalCord_C</th>
            <th>SpinalCord_L</th>
            <th>SpinalCord_T</th>
            <th>Spleen</th>
            <th>Sternohyoid_M</th>
            <th>Stomach</th>
            <th>Subclavian_A</th>
            <th>Subclavian_A_L</th>
            <th>Subclavian_A_R</th>
            <th>Subclavian_V</th>
            <th>Subclavian_V_L</th>
            <th>Subclavian_V_R</th>
            <th>T1</th>
            <th>T10</th>
            <th>T11</th>
            <th>T12</th>
            <th>T2</th>
            <th>T3</th>
            <th>T4</th>
            <th>T5</th>
            <th>T6</th>
            <th>T7</th>
            <th>T8</th>
            <th>T9</th>
            <th>TMJ</th>
            <th>TMJ_L</th>
            <th>TMJ_R</th>
            <th>TemporalLobe</th>
            <th>TemporalLobe_L</th>
            <th>TemporalLobe_R</th>
            <th>Testicles</th>
            <th>Thyroid</th>
            <th>Tongue</th>
            <th>Trachea</th>
            <th>Urethra</th>
            <th>Uterus</th>
            <th>Vein</th>
            <th>Ventricle</th>
            <th>Ventricle_L</th>
            <th>Ventricle_R</th>
            <th>Vertebra</th>
            <th>Vertebra_C</th>
            <th>Vertebra_L</th>
            <th>Vertebra_T</th>
            <th>Vertebral_A</th>
            <th>Vertebral_A_L</th>
            <th>Vertebral_A_R</th>
        </tr>
        <?php

        echo $res_html;

        ?>
    </table>
</div>

<div>
    <form enctype="multipart/form-data" action="download.php"
          id="linkingmed_form" method="post">
        选择要下载的磁盘:<br>
        <?php
        $count = 0;
        $place_array = get_save_place();
        foreach ($place_array as $place_name){
            $checked = '';
            if($count == 0){
                $checked = ' checked="checked" ';
            }
            echo '<input name="place" type="radio"' . $checked .
                'value="' . $place_name . '">' . $place_name . '<br>';
            $count += 1;
        }
        echo '<input type="hidden" name="query" value="'. $query . '">';
        ?>

        <input type="submit" name="submit">
    </form>
</div>




</body>
</html>