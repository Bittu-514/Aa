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
        git branch: 'master', url: 'https://github.com/Bittu-514/Aa.git'
        sh "ls"
      }
    }
    stage('AWSCLI code exucution'){
      steps{
        sh "aws lambda create-function --function-name Mahesh --runtime python3.9 --timeout 840 --zip-file fileb://Mahesh.zip --handler Mahesh.lambda_handler  --role arn:aws:iam::462173630261:role/full_access_role --region us-east-2"
      }
    }
    stage('Cleaning WS1'){
      steps{
        cleanWs()
      }
    }
  }
}
