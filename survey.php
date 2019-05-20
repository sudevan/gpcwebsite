<?php

       $question='{ "elements": [
                {
                    type: "input",
                    name: "Program",
                    title: "Program",
                    choices: ["Computer Hardware Engineering", "Civil Engineering", "Mechanical Engineering", "Electronics Engineering", "Instrumentation Engineering","Electrical and Electronics Engineering"]
                }

            }';

/*
	$json = '
        "element":{
        "type": "matrix", "name": "Quality", "title": "Please indicate if you agree or disagree with the following statements",
        "columns": [{ "value": 1, "text": "Below average" },
        { "value": 2, "text": "Average" },
        { "value": 3, "text": "Good" },
        { value: 4, "text": "Excellent" }],
        rows: [{ "value": "regularity", "text": "Regularity in classes" },
        { "value": "Completion", "text": "Completion of topics in the syllabus" },
        { "value": "Communication", "text": "Communication skills" },
        { "value": "discussions", "text": "Conducting the class room discussions" },
        { "value": "reallife", "text": "Applicability/Relevance to Real life Situations" },
        { "value": "latestdevelopment", "text": "Refers to latest Developments in the field" },
        { "value": "Teachingaid", "text": "Uses of Teaching Aids (OHP, blackboard, PPT)" },
        { "value": "classtestdiscussion", "text": "Discussuin and evaluation of  Class tests and assignments" },
        { "value": "equalconsideration", "text": "Equal considerations is given to all" },
        { "value": "careergoals", "text": "Approach towards developing professional skills among students and in realizing career goals" },
        { "value": "Teachingaid", "text": "Overall teaching effectivenes" }]
    }';*/

	echo json_encode($question);
?>