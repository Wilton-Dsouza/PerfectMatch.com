FROM openjdk:8-jdk-alpine

EXPOSE 3000
ADD target/docker-jenkins-test.jar docker-jenkins-test.jar
ENTRYPOINT ["java","-jar",/docker-jenkins-test.jar]
# For Spring-Boot project, use the entrypoint below to reduce Tomcat startup time.
#ENTRYPOINT exec java $JAVA_OPTS -Djava.security.egd=file:/dev/./urandom -jar testing.jar
