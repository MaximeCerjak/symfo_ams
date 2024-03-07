pipeline {

          agent any

          environment {
            DOCKERHUB_CREDENTIALS = credentials('dockerhub_cred')
          }

          
          stages{
            
          stage('build docker image') {
            steps {
                
                sh 'docker build -t camp_symfony .'
                
                  }
          }
            
            
            stage('Run docker-compose') {
            steps {
                
                sh 'docker compose -f docker-compose.yml up -d'
                
                  }
            }
            
            
            
            
      }
}
