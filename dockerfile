FROM openjdk:8-jdk-alpine

EXPOSE 3000
ADD target/Devops-0.0.1-SNAPSHOT Devops-0.0.1-SNAPSHOT.jar
ENTRYPOINT ["java","-jar",/Devops-0.0.1-SNAPSHOT.jar]

# For Spring-Boot project, use the entrypoint below to reduce Tomcat startup time.
#ENTRYPOINT exec java $JAVA_OPTS -Djava.security.egd=file:/dev/./urandom -jar testing.jar
