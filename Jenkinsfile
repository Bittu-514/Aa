pipeline{
  agent {label 'main'}
  stages{
    stage('Cleaning WS'){
      steps{
        cleanWs()
      }
    }
    stage('repo pulling'){
      steps{
        git branch: 'main', url: 'https://github.com/Bittu-514/Aa.git'
        sh "ls"
      }
    }
    stage('AWSCLI code exucution'){
      steps{
        sh "aws lambda create-function --function-name Mahesh_lambda_function --runtime python3.9 --timeout 840 --zip-file fileb://Mahesh_lambda_function.zip --handler Mahesh_lambda_function.lambda_handler  --role arn:aws:iam::748834350686:role/full_access_role --region us-east-2"
      }
    }
    stage('Cleaning WS1'){
      steps{
        cleanWs()
      }
    }
  }
}
